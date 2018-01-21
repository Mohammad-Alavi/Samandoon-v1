<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;

class UpdateEventTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        if (empty($data)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        try {
            $event = $this->repository->update($data, $id);
            if (array_key_exists('event_image', $data)) {
                $event->clearMediaCollection('event_image');
                $event->addMediaFromRequest('event_image')->toMediaCollection('event_image');
            }
            return $event;
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Updating Event failed');
        }
    }
}
