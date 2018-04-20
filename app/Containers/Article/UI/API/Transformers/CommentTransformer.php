<?php

namespace App\Containers\Article\UI\API\Transformers;

use App\Containers\User\Models\User;
use Vinkla\Hashids\Facades\Hashids;

class CommentTransformer
{
    public function transform($comments)
    {
        $tempArray = [];
        if (is_iterable($comments)) {
            foreach ($comments as $comment) {
                if (str_contains($comment->commentable_type, 'Article')) {
                    $comment->commentable_type = 'Article';
                    $creator_data = User::find($comment->creator_id);
                }

                $response = [
                    'object' => 'Comment',
                    'id' => Hashids::encode($comment->id),
                    'body' => $comment->body,
                    'commentable_id' => Hashids::encode($comment->commentable_id),
                    'commentable_type' => $comment->commentable_type,
                    'creator_id' => Hashids::encode($comment->creator_id),
                    'creator_type' => 'User',
                    'creator_data' => [
                        'first_name' => $creator_data->first_name,
                        'last_name' => $creator_data->last_name,
                        'avatar' => empty($creator_data->getFirstMediaUrl('avatar')) ?
                            'http://api.' . str_replace('http://', '', config('app.url')) . '/v1/storage' . config('samandoon.default.avatar_thumb') :
                            'http://api.' . str_replace('http://', '', config('app.url')) . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $creator_data->getFirstMedia('avatar')->getUrl('thumb')),
                        'ngo_data' => [
                            'ngo_id' => $creator_data->ngo->id ? $creator_data->ngo->getHashedKey() : null,
                            'name' => $creator_data->ngo->id ? $creator_data->ngo->name : null,
                            'confirmed' => $creator_data->ngo->id ? $creator_data->ngo->confirmed : null,
                        ]
                    ],
                    '_lft' => $comment->_lft,
                    '_rgt' => $comment->_rgt,
                    'parent_id' => is_null($comment->parent_id) ? null : Hashids::encode($comment->parent_id),
                    'created_at' => $comment->created_at,
                    'updated_at' => $comment->updated_at,

                    'view_comment' => [
                        'href' => 'v1/ngo/article/comment/' . Hashids::encode($comment->id),
                        'method' => 'GET'
                    ]
                ];

                array_push($tempArray, $response);
            }

            $paginatedDataArray = $comments->toArray();
            $data = [
                'data' => $tempArray,
                'meta' => [
                    'pagination' => [
                        'per_page' => array_key_exists('per_page', $paginatedDataArray) ? $paginatedDataArray['per_page'] : null,
                        'current_page' => array_key_exists('current_page', $paginatedDataArray) ? $paginatedDataArray['current_page'] : null,
                        'total_pages' => array_key_exists('last_page', $paginatedDataArray) ? $paginatedDataArray['last_page'] : null,
                    ]
                ]
            ];
        } else {
            if (str_contains($comments->commentable_type, 'Article')) {
                $comments->commentable_type = 'Article';
                $creator_data = User::find($comments->creator_id);
            }

            $response = [
                'object' => [
                    'object' => 'Comment',
                    'id' => Hashids::encode($comments->id),
                    'body' => $comments->body,
                    'commentable_id' => Hashids::encode($comments->commentable_id),
                    'commentable_type' => $comments->commentable_type,
                    'creator_id' => Hashids::encode($comments->creator_id),
                    'creator_type' => 'User',
                    'creator_data' => [
                        'first_name' => $creator_data->first_name,
                        'last_name' => $creator_data->last_name,
                        'avatar' => empty($creator_data->getFirstMediaUrl('avatar')) ?
                            'http://api.' . str_replace('http://', '', config('app.url')) . '/v1/storage' . config('samandoon.default.avatar_thumb') :
                            'http://api.' . str_replace('http://', '', config('app.url')) . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $creator_data->getFirstMedia('avatar')->getUrl('thumb')),
                        'ngo_data' => [
                            'ngo_id' => $creator_data->ngo->id ? $creator_data->ngo->getHashedKey() : null,
                            'name' => $creator_data->ngo->id ? $creator_data->ngo->name : null,
                            'confirmed' => $creator_data->ngo->id ? $creator_data->ngo->confirmed : null,
                        ]
                    ],
                    '_lft' => $comments->_lft,
                    '_rgt' => $comments->_rgt,
                    'parent_id' => is_null($comments->parent_id) ? null : Hashids::encode($comments->parent_id),
                    'created_at' => $comments->created_at,
                    'updated_at' => $comments->updated_at,

                    'view_comment' => [
                        'href' => 'v1/ngo/article/comment/' . Hashids::encode($comments->id),
                        'method' => 'GET'
                    ]
                ],
            ];

            array_push($tempArray, $response);

            $data = [
                'data' => $tempArray,
                'meta' => [
                    'pagination' => [
                        'per_page' => null,
                        'current_page' => null,
                        'total_pages' => null,
                    ]
                ]
            ];
        }


        return $data;
    }
}
