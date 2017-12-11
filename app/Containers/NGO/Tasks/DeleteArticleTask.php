<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\ArticleRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteArticleTask extends Task
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException('Failed to delete Article');
        }
    }
}
