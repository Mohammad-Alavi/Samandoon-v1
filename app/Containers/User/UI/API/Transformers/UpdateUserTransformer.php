<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

class UpdateUserTransformer extends Transformer
{
    public function transform(User $user)
    {
        $userTransformer = new UserTransformer();

        $response = [
            'msg' => 'User updated',
            'user' => $userTransformer->transform($user),
            'view_user' => [
                'href'  =>  'v1/user/' . $user->getHashedKey(),
                'method'    =>  'GET'
            ],
        ];

        return $response;
    }
}
