<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Criterias\Eloquent\OrderByCreationDateDescendingCriteria;
use App\Ship\Criterias\Eloquent\OrderByFieldCriteria;
use App\Ship\Parents\Tasks\Task;

class ListNgosTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
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
}
