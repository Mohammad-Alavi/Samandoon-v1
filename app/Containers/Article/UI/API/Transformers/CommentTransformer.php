<?php

namespace App\Containers\Article\UI\API\Transformers;

use App\Containers\Article\Models\Article;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\User\Models\User;
use Vinkla\Hashids\Facades\Hashids;

class CommentTransformer
{
    private function responseCreator($comment, $creatorData, $ngo)
    {
//
//        $currentUser = auth('api')->user();
//
//        if ($comment->commentable_type === 'App\Containers\Article\Models\Article') {
//            $article = Article::find($comment->commentable_id);
//        }
//
//        if (!is_null($currentUser->ngo->id) || !is_null($currentUser))
//            $can_delete = false;
//        else {
//            if (
//                // True if user in not the creator of the comment
//                $currentUser->id !== $comment->creator_id &&
//                // True if user is not the article owner
//                $currentUser->ngo()->id !== $article->ngo->id
//            ) {
//                $can_delete = false;
//            } else {
//                $can_delete = true;
//            }
//        }

        $response = [
            'object' => 'Comment',
            'id' => Hashids::encode($comment->id),
            'body' => $comment->body,
            'commentable_id' => Hashids::encode($comment->commentable_id),
            'commentable_type' => $comment->commentable_type,
            'creator_id' => Hashids::encode($comment->creator_id),
            'creator_type' => 'User',
            'creator_data' => [
                'first_name' => $creatorData->first_name,
                'last_name' => $creatorData->last_name,
                'images' => [
                    'avatar_thumb' => empty($creatorData->getFirstMediaUrl('avatar')) ?
                        config('samandoon.api_url') . '/v1/storage' . config('samandoon.default.avatar_thumb') :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $creatorData->getFirstMedia('avatar')->getUrl('thumb')),
                ],
                'ngo_data' => [
                    'ngo_id' => $creatorData->ngo->id ? $creatorData->ngo->getHashedKey() : null,
                    'name' => $creatorData->ngo->id ? $creatorData->ngo->name : null,
                    'confirmed' => $creatorData->ngo->id ? $creatorData->ngo->confirmed : null,
                ]
            ],
//            'can_delete' => $can_delete,
            '_lft' => $comment->_lft,
            '_rgt' => $comment->_rgt,
            'parent_id' => is_null($comment->parent_id) ? null : Hashids::encode($comment->parent_id),
            'created_at' => $comment->created_at,
            'updated_at' => $comment->updated_at,
            'commented_on_ngo' => $ngo,
            'view_comment' => [
                'href' => 'v1/ngo/article/comment/' . Hashids::encode($comment->id),
                'method' => 'GET'
            ]
        ];

        return $response;
    }

    public function transform($comments, $ngo)
    {
        $tempArray = [];
        // only works for get all comments
        if (is_iterable($comments)) {
            foreach ($comments as $comment) {
                if (str_contains($comment->commentable_type, 'Article')) {
                    $comment->commentable_type = 'Article';
                    $creatorData = User::find($comment->creator_id);
                }
                array_push($tempArray, $this->responseCreator($comment, $creatorData));
            }

            // turn comment to array just so i can get paginated data from it
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
            // works for create comment and get single comment
            $comment = $comments;
            if (str_contains($comment->commentable_type, 'Article')) {
                $comment->commentable_type = 'Article';
                $creatorData = User::find($comment->creator_id);
            }

            $data = ['data' => $this->responseCreator($comment, $creatorData, $ngo)];
        }

        return $data;
    }
}
