<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\ArticleRepository;
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

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Article');
        }
    }
}
