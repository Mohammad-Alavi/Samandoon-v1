<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\ArticleRepository;
use App\Containers\NGO\Models\Article;
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
        $article = $this->repository->find($id);
        throw_if(empty($article->id), new NotFoundException('Article not found.'));
        return $article;
    }
}
