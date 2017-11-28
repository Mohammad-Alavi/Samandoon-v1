<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class UpdateEventTask extends Task
{
    public function run($eventData, $event)
    {
        if (empty($eventData)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        if (array_key_exists('banner_image', $eventData)) {
            Storage::disk('public')->delete($event->banner_image);
            $event->banner_image = $eventData['banner_image'];
            $event->save();
        }
        return App::make(EventRepository::class)->update($eventData, $event->id);
    }
}
