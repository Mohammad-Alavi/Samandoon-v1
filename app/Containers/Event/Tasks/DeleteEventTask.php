<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Parents\Tasks\Task;

class DeleteEventTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }
    public function run($event)
    {
        return $this->repository->delete($event->id);
    }
}
