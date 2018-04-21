<?php

namespace App\Containers\Article\UI\API\Transformers;

class LikersTransformer
{
    public function transform($users)
    {
        $tempArray = [];
        foreach ($users as $user) {
            $response = [
                'object' => 'User',
                'id' => $user->getHashedKey(),
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'images' => [
                    'avatar_thumb' => empty($user->getFirstMediaUrl('avatar')) ?
                        config('samandoon.api_url') . '/v1/storage' . config('samandoon.default.avatar_thumb') :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $user->getFirstMedia('avatar')->getUrl('thumb')),
                ],
                'confirmed' => $user->confirmed,
                'gender' => $user->gender,
                'birth' => $user->birth,
                'ngo_id' => $user->ngo->id ? $user->ngo->getHashedKey() : null,

                'view_user' => [
                    'href' => 'v1/user/' . $user->getHashedKey(),
                    'method' => 'GET'
                ],
            ];

            array_push($tempArray, $response);
        }

        $paginatedDataArray = $users->toArray();
        $data = [
            'data' => $tempArray,
            'meta' => [
                'pagination' => [
                    'per_page' => $paginatedDataArray['per_page'],
                    'current_page' => $paginatedDataArray['current_page'],
                    'total_pages' => $paginatedDataArray['last_page'],
                ]
            ]
        ];

        return $data;
    }
}