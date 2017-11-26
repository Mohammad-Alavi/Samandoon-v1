<?php

namespace App\Containers\NGO\UI\API\Transformers;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Transformers\Transformer;
use Illuminate\Support\Facades\Hash;
use Vinkla\Hashids\Facades\Hashids;

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
            'object' => 'NGO',
            'id' => $ngo->getHashedKey(),
            'name' => $ngo->name,
            'description' => $ngo->description,
            'subjects' => $ngo->subjects,
            'area_of_activity' => $ngo->area_of_activity,
            'address' => $ngo->address,
            'zip_code' => $ngo->zip_code,
            'type' => $ngo->type,
            'confirmed' => ($ngo->confirmed == 0) ? false : true,
            'logo_photo' => $ngo->logo_photo,
            'banner_photo' => $ngo->banner_photo,
            'user_id' => Hashids::encode($ngo->user_id),
            'Registration specification' => [
                'national_number' => $ngo->national_number,
                'registration_number' => $ngo->registration_number,
                'registration_date' => $ngo->registration_date,
                'registration_unit' => $ngo->registration_unit,
            ],
        ];

        if($ngo->created_at && $ngo->created_at) {
            $response = $this->ifAdmin([
                'real_id' => $ngo->id,
            ], $response);
        }
        elseif($ngo->created_at) {
            $response = [
                'readable_created_at'  => $ngo->created_at->diffForHumans(),
            ];
        }
        elseif($ngo->created_at) {
            $response = [
                'readable_updated_at'  => $ngo->updated_at->diffForHumans(),
            ];
        }

        return $response;
    }
}
