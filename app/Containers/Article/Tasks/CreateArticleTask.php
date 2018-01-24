<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Data\Repositories\ArticleRepository;
use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateArticleTask extends Task
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data): Article
    {
        try {
            $article = $this->repository->create($data);
            if (array_key_exists('article_image', $data)) {
                $article->addMediaFromRequest('article_image')->toMediaCollection('article_image');
            }
            return $article;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Article');
        }
    }
}
