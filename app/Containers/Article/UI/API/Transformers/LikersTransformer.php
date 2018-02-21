<?php

namespace App\Containers\Article\UI\API\Transformers;

class LikersTransformer
{
    public function transform($users)
    {
        $tempArray = [];
        foreach ($users as $user) {
            $response = [
                'object' => [
                    'object' => 'User',
                    'id' => $user->getHashedKey(),
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'avatar' => empty($user->getFirstMediaUrl('avatar')) ?
                        'http://api.' . str_replace('http://', '', config('app.url')) . '/v1/storage' . config('samandoon.default.avatar') :
                        'http://api.' . str_replace('http://', '', config('app.url')) . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $user->getFirstMediaUrl('avatar')),
                    'confirmed' => $user->confirmed,
                    'gender' => $user->gender,
                    'birth' => $user->birth,
                    'ngo_id' => $user->ngo->id ? $user->ngo->getHashedKey() : null,

                    'view_user' => [
                        'href' => 'v1/user/' . $user->getHashedKey(),
                        'method' => 'GET'
                    ]
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
