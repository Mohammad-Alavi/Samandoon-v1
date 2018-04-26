<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Data\Repositories\ArticleRepository;
use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use GetStream\Stream\Client;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
            DB::beginTransaction();
            $article = $this->repository->create($data);
            if (array_key_exists('article_image', $data)) {
                $article->addMediaFromRequest('article_image')->toMediaCollection('article_image');
            }
        } catch (Exception $exception) {
            DB::rollBack();
            throw new CreateResourceFailedException('Failed to create new Article');
        }
        finally {
            DB::commit();
            return $article;
        }
    }
}
