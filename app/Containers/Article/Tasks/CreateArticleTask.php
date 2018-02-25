<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Data\Repositories\ArticleRepository;
use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use GetStream\Stream\Client;
use Illuminate\Support\Carbon;

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

            // Add activity
            $client = new Client(config('getStream.stream_api_key'), config('getStream.stream_api_secret'));
            $userFeed = $client->feed('ngo', $article->ngo->getHashedKey());
            $feedData = [
                'actor' => 'NGO:' . $article->ngo->getHashedKey(),
                'verb' => "create",
                'object' => 'Article:' . $article->getHashedKey(),
                'foreign_id' => 'Article:' . $article->getHashedKey(),
                'time' => Carbon::now()->toIso8601String()
            ];
            $userFeed->addActivity($feedData);

            return $article;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Article');
        }
    }
}
