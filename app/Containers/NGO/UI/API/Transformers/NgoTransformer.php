<?php

namespace App\Containers\NGO\UI\API\Transformers;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Transformers\Transformer;

class NgoTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
    ];

    /**
     * @param Ngo $ngo
     * @return array
     */
    public function transform(Ngo $ngo)
    {
        $response = [

            'object' => 'Ngo',
            'id' => $ngo->getHashedKey(),
            'name' => $ngo->name,
            'description' => $ngo->description,
            'subject' => $ngo->subject,
            'area_of_activity' => $ngo->area_of_activity,
            'address' => $ngo->address,
            'registration_date' => $ngo->registration_date,
            'registration_number' => $ngo->registration_number,
            'national_number' => $ngo->national_number,
            'license_number' => $ngo->license_number,
            'license_date' => $ngo->license_date,
            'logo_photo_path' => $ngo->logo_photo_path,
            'banner_photo_path' => $ngo->banner_photo_path,
            'user_id' => $ngo->user_id,
            'created_at' => $ngo->created_at,
            'updated_at' => $ngo->updated_at,
            'readable_created_at'  => $ngo->created_at->diffForHumans(),
            'readable_updated_at'  => $ngo->updated_at->diffForHumans(),
        ];

        $response = $this->ifAdmin([
            'real_id'    => $ngo->id,
        ], $response);

        return $response;
    }
}
