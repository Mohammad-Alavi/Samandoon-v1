<?php

namespace App\Containers\NGO\UI\API\Transformers;

use App\Containers\NGO\Models\Article;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;
use Vinkla\Hashids\Facades\Hashids;

class ArticleTransformer extends Transformer
{
    protected $defaultIncludes = [

    ];

   protected $availableIncludes = [
        'NGO',
        'User'
    ];

    public function transform(Article $entity)
    {
        $response = [
            'msg' => $entity->msg,
            'object' => [
                'object' => 'Article',
                'id' => $entity->getHashedKey(),
                'title' => $entity->title,
                'text' => $entity->text,
                'ngo' => Hashids::encode($entity->ngo->id),
                'created_at' => $entity->created_at,
                'updated_at' => $entity->updated_at,
                'view_article' => [
                    'href' => 'v1/ngo/article/' . $entity->getHashedKey(),
                    'method' => 'GET'
                ],
            ]
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
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
