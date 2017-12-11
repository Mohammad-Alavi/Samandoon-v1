<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\App;

class FindEventByIdTask extends Task
{
    /**
     * @param $eventId
     * @return mixed
     */
    public function run($eventId)
    {
        // find the event by its id
        try {
            $event = App::make(EventRepository::class)->find($eventId);
        } catch (Exception $e) {
            throw new NotFoundException('Event not found.');
        }

        return $event;
    }
}
