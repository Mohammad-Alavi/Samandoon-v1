<?php

namespace App\Containers\NGO\UI\API\Transformers;

use App\Containers\NGO\Models\Ngo;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class NgoTransformer extends Transformer
{
    protected $defaultIncludes = [
    ];

    protected $availableIncludes = [
        'User',
    ];

    public function transform(Ngo $ngo)
    {
        $response = [
            'msg' => $ngo->msg,
            'object' => [
                'object' => 'NGO',
                'id' => $ngo->getHashedKey(),
                'name' => $ngo->name,
                'description' => $ngo->description,
                'subjects' => $ngo->tags,
                'area_of_activity' => $ngo->area_of_activity,
                'address' => $ngo->address,
                'zip_code' => $ngo->zip_code,
                'type' => $ngo->type,
                'confirmed' => $ngo->confirmed,
                'logo_photo' => 'api.' . str_replace('http://', '' , config('app.url')) . '/v1' . str_replace(str_replace('http://', '' , config('app.url')), '', $ngo->getFirstMediaUrl('ngo_logo')),
                'banner_photo' => 'api.' . str_replace('http://', '' , config('app.url')) . '/v1' . str_replace(str_replace('http://', '' , config('app.url')), '', $ngo->getFirstMediaUrl('ngo_banner')),
                'user_id' => $ngo->user->getHashedKey(),
                'Registration specification' => [
                    'national_number' => $ngo->national_number,
                    'registration_number' => $ngo->registration_number,
                    'registration_date' => $ngo->registration_date,
                    'registration_unit' => $ngo->registration_unit,
                ],
                'view_ngo' => [
                    'href' => 'v1/ngo/' . $ngo->getHashedKey(),
                    'method' => 'GET'
                ],
            ]
        ];

        $response = $this->ifAdmin([
            'real_id' => $ngo->id,
        ], $response);

        return $response;
    }

    public function includeUser(Ngo $ngo)
    {
        // use `item` with single relationship
        return $this->item($ngo->user, new UserTransformer());
    }
}