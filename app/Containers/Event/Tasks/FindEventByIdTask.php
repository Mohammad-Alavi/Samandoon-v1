<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindEventByIdTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): Event
    {
        try {
            $event = $this->repository->find($id);
        } catch (Exception $exception) {
        }
        throw_if(empty($event->id), NotFoundException::class, 'Event not found.');
        return $event;
    }
}
