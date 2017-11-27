<?php

namespace App\Containers\Event\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Exceptions\EventNotFoundException;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class UpdateEventTask extends Task
{
    public function run($eventData, $eventId)
    {
        // throw exception if event is not found
        throw_unless(count(Event::find($eventId)) > 0 ? true : false, new EventNotFoundException());
        if (empty($eventData)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        if (array_key_exists('banner_image', $eventData)) {
            Storage::disk('public')->delete(Apiato::call('Event@FindEventByIdTask', [$eventId])->banner_image);
        }
        return App::make(EventRepository::class)->update($eventData, $eventId);
    }
}
