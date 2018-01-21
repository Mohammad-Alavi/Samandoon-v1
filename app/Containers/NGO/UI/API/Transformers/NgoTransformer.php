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
        'user',
        'articles'
    ];

    public function transform(Ngo $ngo)
    {
        $response = [
            'msg' => $ngo->msg,
            'object' => [
                'object' => 'NGO',
                'id' => $ngo->id ? $ngo->getHashedKey() : null,
                'name' => $ngo->name,
                'description' => $ngo->description,
                'subjects' => $ngo->tags,
                'area_of_activity' => $ngo->area_of_activity,
                'address' => $ngo->address,
                'zip_code' => $ngo->zip_code,
                'type' => $ngo->type,
                'confirmed' => $ngo->confirmed,
                'ngo_logo' => empty($ngo->getFirstMediaUrl('ngo_logo')) ?
                    'http://api.' . str_replace('http://', '' , config('app.url')) . '/v1' . config('samandoon.default.ngo_logo') :
                    'http://api.' . str_replace('http://', '', config('app.url')) . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $ngo->getFirstMediaUrl('ngo_logo')),
                'ngo_banner' => empty($ngo->getFirstMediaUrl('ngo_banner')) ?
                    'http://api.' . str_replace('http://', '' , config('app.url')) . '/v1' . config('samandoon.default.ngo_banner') :
                    'http://api.' . str_replace('http://', '', config('app.url')) . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $ngo->getFirstMediaUrl('ngo_banner')),
                'user_id' => $ngo->user ? $ngo->user->getHashedKey() : null,
                'Registration specification' => [
                    'national_number' => $ngo->national_number,
                    'registration_number' => $ngo->registration_number,
                    'registration_date' => $ngo->registration_date,
                    'registration_unit' => $ngo->registration_unit,
                ],

                'created_at' => $ngo->created_at,
                'updated_at' => $ngo->updated_at,
                'readable_created_at' => $ngo->created_at ? $ngo->created_at->diffForHumans() : null,
                'readable_updated_at' => $ngo->updated_at ? $ngo->updated_at->diffForHumans() : null,

                'view_ngo' => [
                    'href' => $ngo->id ? 'v1/ngo/' . $ngo->getHashedKey() : null,
                    'method' => 'GET'
                ],
            ]
        ];

        $response = $this->ifAdmin([
            'real_id' => $ngo->id,
//            'deleted_at' => $ngo->deleted_at,
        ], $response);

        return $response;
    }

    public function includeUser(Ngo $ngo)
    {
        // use `item` with single relationship
        return $this->item($ngo->user, new UserTransformer());
    }

    public function includeArticles(Ngo $ngo)
    {
        // use `item` with single relationship
        return $this->collection($ngo->article, new ArticleTransformer());
    }
}