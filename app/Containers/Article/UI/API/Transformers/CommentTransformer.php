<?php

namespace App\Containers\Article\UI\API\Transformers;

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
                }

                $response = [
                    'object' => [
                        'object' => 'Comment',
                        'id' => Hashids::encode($comment->id),
                        'body' => $comment->body,
                        'commentable_id' => Hashids::encode($comment->commentable_id),
                        'commentable_type' => $comment->commentable_type,
                        'creator_id' => Hashids::encode($comment->creator_id),
                        'creator_type' => 'User',
                        '_lft' => $comment->_lft,
                        '_rgt' => $comment->_rgt,
                        'parent_id' => is_null($comment->parent_id) ? null : Hashids::encode($comment->parent_id),
                        'created_at' => $comment->created_at,
                        'updated_at' => $comment->updated_at,

                        'view_comment' => [
                            'href' => 'v1/ngo/article/comment/' . Hashids::encode($comment->id),
                            'method' => 'GET'
                        ]
                    ],
                ];

                array_push($tempArray, $response);
            }

            $paginatedDataArray = $comments->toArray();
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
        }
        else {
            if (str_contains($comments->commentable_type, 'Article')) {
                $comments->commentable_type = 'Article';
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
