<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class DeleteEventTask extends Task
{
    public function run($event)
    {
        Storage::disk('public')->delete($event->banner_image);
        // delete all images associated with this event
        if($event->images){
            foreach($event->images as $image) {
                Storage::disk('public')->delete($image->image);
                $image->forceDelete();
            }
        }
        return App::make(EventRepository::class)->delete($event->id);
    }
}
