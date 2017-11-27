<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Exceptions\EventNotFoundException;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class UpdateEventTask extends Task
{
    public function run($eventData, $eventId)
    {
        throw_unless(count(Event::find($eventId)) > 0 ? true : false, new EventNotFoundException());
        if (empty($eventData)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        return App::make(EventRepository::class)->update($eventData, $eventId);
    }
}
