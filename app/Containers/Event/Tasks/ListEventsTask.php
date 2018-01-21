<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Parents\Tasks\Task;

class ListEventsTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     *
     */
    // You can add criteria and parameters to sort and limit the results
    // for reference look at "ListUsersTask" in
    // App\Containers\User\Tasks
    // Todo Add criteria and parameters
    public function run()
    {
        return $this->repository->paginate(null, '*');
    }
}
