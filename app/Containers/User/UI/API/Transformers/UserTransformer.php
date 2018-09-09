<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

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
        'ngo'
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
                'images' => [
                    'avatar' => empty($user->getFirstMediaUrl('avatar')) ?
                        config('samandoon.storage_path') . config('samandoon.default.avatar') :
                        config('samandoon.storage_path') . str_replace(config('samandoon.storage_path_replace'), '', $user->getFirstMediaUrl('avatar')),
                    'avatar_thumb' => empty($user->getFirstMediaUrl('avatar')) ?
                        config('samandoon.storage_path') . config('samandoon.default.avatar_thumb') :
                        config('samandoon.storage_path') . str_replace(config('samandoon.storage_path_replace'), '', $user->getFirstMedia('avatar')->getUrl('thumb')),
                ],
                'confirmed' => $user->confirmed,
                'gender' => $user->gender,
                'birth' => $user->birth,
                'ngo_id' => $user->ngo->id ? $user->ngo->getHashedKey() : null,

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
                'view_user' => [
                    'href' => 'v1/user/' . $user->getHashedKey(),
                    'method' => 'GET'
                ],
                'stats' => [
                    'ngo_followings_count' => $user->subscriptions(Ngo::class)->get()->count(),
                ],
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

    public function includeNgo(User $user)
    {
        return $this->item($user->ngo, new NgoTransformer());
    }
}