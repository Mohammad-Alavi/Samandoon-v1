<?php

namespace App\Containers\Location\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Location\UI\API\Requests\GetAllLocationsRequest;
use App\Containers\Location\UI\API\Transformers\GetAllLocationsTransformer;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    // TODO
    public function getAllLocations(GetAllLocationsRequest $request)
    {
        $locations = Apiato::call('Location@GetAllLocationsAction');
        $transformedLocations = $this->transform($locations, GetAllLocationsTransformer::class);

        // get all provinces
        $provinces = [];
        foreach ($transformedLocations['data'] as $locations) {
            if ($locations['lvl'] == 1) {
                array_push($provinces, $locations);
            }
        }

        // put all cities in their respective province
        $provincesAndCities = [];
        foreach ($provinces as $province) {
            $cities = [];
            foreach ($transformedLocations['data'] as $locations) {
                if ($locations['parent'] === $province['id'] && $locations['lvl'] !== 1) {
                    array_push($cities, $locations['name']);
                }
            }
            array_push($provincesAndCities, [
                'province' => $province['name'],
                'cities' => $cities
            ]);
            $data = ['data' => $provincesAndCities];
        }
        return $data;
    }
}