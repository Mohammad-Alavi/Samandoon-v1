<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Exceptions\EventNotFoundException;
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
            throw new EventNotFoundException;
        }

        return $event;
    }
}
