<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

class CreateUserTransformer extends Transformer
{
    public function transform(User $user)
    {
        $userTransformer = new UserTransformer();

        $response = [
            'msg' => 'User created',
            'user' => $userTransformer->transform($user),
            'view_user' => [
                'href'  =>  'v1/user/' . $user->getHashedKey(),
                'method'    =>  'GET'
            ],
        ];

        return $response;
    }
}
