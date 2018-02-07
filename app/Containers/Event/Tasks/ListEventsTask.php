<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Criterias\Eloquent\OrderByFieldCriteria;
use App\Ship\Criterias\Eloquent\ThisEqualThatCriteria;
use App\Ship\Parents\Tasks\Task;

class ListEventsTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
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

    public function ngoId($ngoId)
    {
        $this->repository->pushCriteria(new ThisEqualThatCriteria('ngo_id', $ngoId));
    }
}
