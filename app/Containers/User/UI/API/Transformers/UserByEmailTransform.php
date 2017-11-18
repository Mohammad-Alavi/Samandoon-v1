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
            'first_name'           => $user->first_name,
            'last_name'            => $user->last_name,
            'email'                => $user->email,
            'avatar'               => $user->avatar,
        ];

        return $response;
    }
}