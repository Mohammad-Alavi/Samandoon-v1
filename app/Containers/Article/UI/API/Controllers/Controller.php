<?php

namespace App\Containers\Article\UI\API\Controllers;

use App\Containers\Article\UI\API\Requests\CreateArticleRequest;
use App\Containers\Article\UI\API\Requests\DeleteArticleRequest;
use App\Containers\Article\UI\API\Requests\GetArticleRequest;
use App\Containers\Article\UI\API\Requests\GetAllArticlesRequest;
use App\Containers\Article\UI\API\Requests\SearchArticlesRequest;
use App\Containers\Article\UI\API\Requests\UpdateArticleRequest;
use App\Containers\Article\UI\API\Transformers\ArticleTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Transporters\DataTransporter;

class Controller extends ApiController
{
    public function createArticle(CreateArticleRequest $request)
    {
        $article = $this->call('Article@CreateArticleAction', [new DataTransporter($request)]);
        $article->msg = 'Article Created';
        return $this->transform($article, ArticleTransformer::class);
    }

    public function deleteArticle(DeleteArticleRequest $request)
    {
        $this->call('Article@DeleteArticleAction', [new DataTransporter($request)]);
        return $this->noContent();
    }

    public function getArticle(GetArticleRequest $request)
    {
        $article = $this->call('Article@GetArticleAction', [$request]);
        $article->msg = 'Article Found';
        return $this->transform($article, ArticleTransformer::class);
    }

    public function updateArticle(UpdateArticleRequest $request)
    {
        $article = $this->call('Article@UpdateArticleAction', [$request]);
        $article->msg = 'Article Updated';
        return $this->transform($article, ArticleTransformer::class);
    }

    public function listAllArticles(GetAllArticlesRequest $request)
    {
        $articles = $this->call('Article@GetAllArticlesAction', [$request]);
        return $this->transform($articles, ArticleTransformer::class);
    }

    public function searchArticles(SearchArticlesRequest $request)
    {
        $articles = $this->call('Article@SearchArticlesAction', [new DataTransporter($request)]);
        $articles->msg = 'Articles found';
        return $this->transform($articles, ArticleTransformer::class);
    }
}
