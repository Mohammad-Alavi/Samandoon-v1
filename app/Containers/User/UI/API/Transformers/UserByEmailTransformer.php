<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

class UserByEmailTransformer extends Transformer
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

    public function transform(User $user)
    {
        $response = [
            'msg' => $user->msg,
            'object' => [
                'object' => 'User',
                'id' => $user->getHashedKey(),
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'avatar' => empty($user->getFirstMediaUrl('avatar')) ?
                    'http://api.' . str_replace('http://', '', config('app.url')) . '/v1/storage' . config('samandoon.default.avatar') :
                    'http://api.' . str_replace('http://', '', config('app.url')) . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $user->getFirstMediaUrl('avatar')),
            ],
            'view_user' => [
                'href' => 'v1/user/' . $user->getHashedKey(),
                'method' => 'GET'
            ],
        ];

        $response = $this->ifAdmin([
            'real_id' => $user->id,
            'deleted_at' => $user->deleted_at,
        ], $response);

        return $response;
    }
}
