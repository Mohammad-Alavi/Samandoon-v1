<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\ArticleRepository;
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

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException('Article not found');
        }
    }
}
