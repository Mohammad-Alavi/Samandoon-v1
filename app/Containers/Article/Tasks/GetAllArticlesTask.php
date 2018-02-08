<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Data\Repositories\ArticleRepository;
use App\Ship\Criterias\Eloquent\OrderByFieldCriteria;
use App\Ship\Criterias\Eloquent\ThisEqualThatCriteria;
use App\Ship\Parents\Tasks\Task;

class GetAllArticlesTask extends Task
{

    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }

    public function orderBy($orderBy, $sortedBy)
    {
        $this->repository->pushCriteria(new OrderByFieldCriteria($orderBy, $sortedBy));
    }

    public function ngo_id($ngo_id)
    {
        $this->repository->pushCriteria(new ThisEqualThatCriteria('ngo_id', $ngo_id));
    }

    public function where_in($field, $value)
    {
        $this->repository->pushCriteria(new ThisEqualThatCriteria($field, $value));
    }
}
