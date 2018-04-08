<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Data\Repositories\ArticleRepository;
use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindArticleByIdTask extends Task
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): Article
    {
        {
            try {
                $article = $this->repository->find($id);;
            } catch (Exception $exception) {
            }
            throw_if(empty($article->id), NotFoundException::class, 'Article not found.');
            return $article;
        }
    }
}
