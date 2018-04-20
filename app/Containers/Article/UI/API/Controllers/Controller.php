<?php

namespace App\Containers\Article\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Article\UI\API\Requests\CreateArticleRequest;
use App\Containers\Article\UI\API\Requests\CreateCommentRequest;
use App\Containers\Article\UI\API\Requests\DeleteArticleRequest;
use App\Containers\Article\UI\API\Requests\DeleteCommentRequest;
use App\Containers\Article\UI\API\Requests\GetAllCommentsRequest;
use App\Containers\Article\UI\API\Requests\GetArticleRequest;
use App\Containers\Article\UI\API\Requests\GetAllArticlesRequest;
use App\Containers\Article\UI\API\Requests\GetCommentRequest;
use App\Containers\Article\UI\API\Requests\GetLikersReqeust;
use App\Containers\Article\UI\API\Requests\SearchArticlesRequest;
use App\Containers\Article\UI\API\Requests\UpdateArticleRequest;
use App\Containers\Article\UI\API\Requests\UpdateCommentRequest;
use App\Containers\Article\UI\API\Transformers\ArticleTransformer;
use App\Containers\Article\UI\API\Transformers\CommentTransformer;
use App\Containers\Article\UI\API\Transformers\LikersTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Transporters\DataTransporter;

class Controller extends ApiController
{
    public function createArticle(CreateArticleRequest $request)
    {
        $article = Apiato::call('Article@CreateArticleAction', [new DataTransporter($request)]);
        $article->msg = 'Article Created';
        return $this->transform($article, ArticleTransformer::class);
    }

    public function deleteArticle(DeleteArticleRequest $request)
    {
        Apiato::call('Article@DeleteArticleAction', [new DataTransporter($request)]);
        return $this->noContent();
    }

    public function getArticle(GetArticleRequest $request)
    {
        $article = Apiato::call('Article@GetArticleAction', [$request]);
        $article->msg = 'Article Found';
        return $this->transform($article, ArticleTransformer::class);
    }

    public function updateArticle(UpdateArticleRequest $request)
    {
        $article = Apiato::call('Article@UpdateArticleAction', [$request]);
        $article->msg = 'Article Updated';
        return $this->transform($article, ArticleTransformer::class);
    }

    public function listAllArticles(GetAllArticlesRequest $request)
    {
        $articles = Apiato::call('Article@GetAllArticlesAction', [$request]);
        return $this->transform($articles, ArticleTransformer::class);
    }

    public function getLikers(GetLikersReqeust $request)
    {
        $likers = Apiato::call('Article@GetLikersAction', [new DataTransporter($request)]);
        $likersTransformer = new LikersTransformer();
        return $likersTransformer->transform($likers);
    }

    public function searchArticles(SearchArticlesRequest $request)
    {
        $articles = Apiato::call('Article@SearchArticlesAction', [new DataTransporter($request)]);
        $articles->msg = 'Articles found';
        return $this->transform($articles, ArticleTransformer::class);
    }

    public function createComment(CreateCommentRequest $request)
    {
        $comment = Apiato::call('Article@CreateCommentAction', [new DataTransporter($request)]);
        $commentTransformer = new CommentTransformer();
        return $commentTransformer->transform($comment);
    }

    public function getAllComments(GetAllCommentsRequest $request)
    {
        $comments = Apiato::call('Article@GetAllCommentsAction', [new DataTransporter($request)]);
        $commentTransformer = new CommentTransformer();
        return $commentTransformer->transform($comments);
    }

    public function getComment(GetCommentRequest $request)
    {
        $comment = Apiato::call('Article@GetCommentAction', [new DataTransporter($request)]);
        $commentTransformer = new CommentTransformer();
        return $commentTransformer->transform($comment);
    }

    public function deleteComment(DeleteCommentRequest $request)
    {
        Apiato::call('Article@DeleteCommentAction', [new DataTransporter($request)]);
        return $this->noContent();
    }

    public function updateComment(UpdateCommentRequest $request)
    {
        $comment = Apiato::call('Article@UpdateCommentAction', [new DataTransporter($request)]);
        $commentTransformer = new CommentTransformer();
        return $commentTransformer->transform($comment);
    }
}
