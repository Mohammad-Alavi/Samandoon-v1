<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Data\Repositories\ArticleRepository;
use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateArticleTask extends Task
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data): Article
    {
        if (empty($data)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        try {
            $article = $this->repository->update($data, $id);
            if (array_key_exists('article_image', $data)) {
                $article->clearMediaCollection('article_image');
                $article->addMediaFromRequest('article_image')->toMediaCollection('article_image');
            }
            return $article;
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Updating Article failed');
        }
    }
}
