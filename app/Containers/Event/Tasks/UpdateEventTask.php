<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class UpdateEventTask extends Task
{
    /**
     * @param $eventData
     * @param $eventId
     * @return mixed
     */
    public function run($eventData, $eventId)
    {
        if (empty($eventData)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        return App::make(EventRepository::class)->update($eventData, $eventId);
    }
}
