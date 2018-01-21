<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;

class FindEventByIdTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($eventId)
    {
        $event = $this->repository->find($eventId);
        throw_if(empty($event->id), new NotFoundException('Event not found.'));
        return $event;
    }
}
