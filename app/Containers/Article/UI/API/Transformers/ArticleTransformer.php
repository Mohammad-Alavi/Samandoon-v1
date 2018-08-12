<?php

namespace App\Containers\Article\UI\API\Transformers;

use App\Containers\Article\Models\Article;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class ArticleTransformer extends Transformer
{
    protected $defaultIncludes = [

    ];

    protected $availableIncludes = [
        'ngo',
        'user'
    ];

    public function transform(Article $article)
    {
        $currentUser = auth('api')->user();
        $response = [
            'msg' => $article->msg,
            'object' => [
                'object' => 'Article',
                'id' => $article->getHashedKey(),
                'text' => $article->text,
                'image' => [
                    'article_image' => empty($article->getFirstMediaUrl('article_image')) ? null :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $article->getFirstMediaUrl('article_image')),
                    'article_image_thumb' => empty($article->getFirstMediaUrl('article_image')) ? null :
                        config('samandoon.api_url') . '/v1' . str_replace(str_replace('http://', '', config('app.url')), '', $article->getFirstMedia('article_image')->getUrl('thumb')),
                ],
                'ngo_id' => $article->ngo->getHashedKey(),
                'created_at' => $article->created_at,
                'updated_at' => $article->updated_at,
                'readable_created_at' => $article->created_at->diffForHumans(),
                'readable_updated_at' => $article->updated_at->diffForHumans(),
                'like_count' => $article->likers()->count(),
                'liked_by_current_user' => empty($currentUser) ? null : $article->isLikedBy($currentUser),
                'comment_count' => $article->commentCount(),
                'seen_count' => $article->getUniqueViews(),

                'view_article' => [
                    'href' => 'v1/ngo/article/' . $article->getHashedKey(),
                    'method' => 'GET'
                ],
            ]
        ];

        $response = $this->ifAdmin([
            'real_id' => $article->id,
            // 'deleted_at' => $article->deleted_at,
        ], $response);

        return $response;
    }

    public function includeUser(Article $article)
    {
        // use `item` with single relationship
        return $this->item($article->ngo->user, new UserTransformer());
    }

    public function includeNGO(Article $article)
    {
        // use `item` with single relationship
        return $this->item($article->ngo, new NgoTransformer());
    }
}