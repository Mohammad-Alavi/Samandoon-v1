<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;
use Vinkla\Hashids\Facades\Hashids;

/**
 * Class UserTransformer.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserTransformer extends Transformer
{

    /**
     * @var  array
     */
    protected $availableIncludes = [
        'roles',
    ];

    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @param \App\Containers\User\Models\User $user
     *
     * @return array
     */
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
                'avatar' => isEmptyOrNullString($user->avatar) ?
                    'api.' . str_replace('http://', '' , config('app.url')) . '/v1' . str_replace(str_replace('http://', '' , config('app.url')), '', $user->getFirstMediaUrl('avatar')) :
                    'api.' . str_replace('http://', '' , config('app.url')) . '/v1' . '/default_images/default_avatar.png',
                'confirmed' => $user->confirmed,
                'gender' => $user->gender,
                'birth' => $user->birth,
                'ngo_id' => $user->ngo_id ? $user->ngo->getHashedKey() : null,

                'social_auth_provider' => $user->social_provider,
                'social_nickname' => $user->social_nickname,
                'social_id' => $user->social_id,
                'social_avatar' => [
                    'avatar' => $user->social_avatar,
                    'original' => $user->social_avatar_original],

                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
                'readable_created_at' => $user->created_at->diffForHumans(),
                'readable_updated_at' => $user->updated_at->diffForHumans(),
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

    public function includeRoles(User $user)
    {
        return $this->collection($user->roles, new RoleTransformer());
    }
}