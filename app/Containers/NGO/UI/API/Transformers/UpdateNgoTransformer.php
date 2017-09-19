<?php

namespace App\Containers\NGO\UI\API\Transformers;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Transformers\Transformer;

class UpdateNgoTransformer extends Transformer
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
     * @internal param Ngo $entity
     */
    public function transform(Ngo $ngo)
    {
        $ngoTransformer = new NgoTransformer();

        $response = [
            'msg' => 'Ngo updated',
            'ngo' => $ngoTransformer->transform($ngo),
            'view_ngo' => [
                'href'  =>  'v1/ngo/' . $ngo->getHashedKey(),
                'method'    =>  'GET'
            ],
        ];

        return $response;
    }
}
