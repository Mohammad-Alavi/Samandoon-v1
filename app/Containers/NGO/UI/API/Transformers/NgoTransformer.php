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
    ];

    public function transform(Ngo $ngo)
    {
        $currentUser = auth('api')->user();
        $response = [
            'msg' => $ngo->msg,
            'object' => [
                'object' => 'NGO',
                'id' => $ngo->id ? $ngo->getHashedKey() : null,
                'name' => $ngo->name,
                'description' => $ngo->description,
                'area_of_activity' => $ngo->area_of_activity,
                'location' => [
                    'city' => $ngo->city,
                    'province' => $ngo->province,
                    'address' => $ngo->address
                ],
                'status' => $ngo->status,
                'subject' => $ngo->subjects()->get(),
                'phone' => $ngo->phones()->get(),
                'zip_code' => $ngo->zip_code,
                'type' => $ngo->type,
                'confirmed' => $ngo->confirmed,
                'images' => [
                    'ngo_logo' => empty($ngo->getFirstMediaUrl('ngo_logo')) ?
                        config('samandoon.api_url') . '/v1/storage' . config('samandoon.default.ngo_logo') :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $ngo->getFirstMediaUrl('ngo_logo')),
                    'ngo_logo_thumb' => empty($ngo->getFirstMedia('ngo_logo')) ?
                        config('samandoon.api_url') . '/v1/storage' . config('samandoon.default.ngo_logo_thumb') :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $ngo->getFirstMedia('ngo_logo')->getUrl('logo_thumb')),
                    'ngo_banner' => empty($ngo->getFirstMediaUrl('ngo_banner')) ?
                        config('samandoon.api_url') . '/v1/storage' . config('samandoon.default.ngo_banner') :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $ngo->getFirstMediaUrl('ngo_banner')),
                    'ngo_banner_thumb' => empty($ngo->getFirstMedia('ngo_banner')) ?
                        config('samandoon.api_url') . '/v1/storage' . config('samandoon.default.ngo_banner_thumb') :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $ngo->getFirstMedia('ngo_banner')->getUrl('banner_thumb')),
                ],
                'user_id' => $ngo->user ? $ngo->user->getHashedKey() : null,
                'registration_specification' => [
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
                'stats' => [
                    'is_following' => is_null($currentUser) ? false : $ngo->isSubscribedBy($currentUser),
                    'followers_count' => $ngo->subscribers()->get()->count()
                    //->makeHidden(['ngo_id', 'pivot', 'confirmed', 'gender','birth', 'is_client', 'created_at', 'updated_at', 'deleted_at', 'social_token', 'social_token_secret', 'social_refresh_token', 'social_expires_in'])->toArray()
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
}