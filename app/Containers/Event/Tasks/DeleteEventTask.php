<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class DeleteEventTask extends Task
{
    public function run($event)
    {
        return App::make(EventRepository::class)->delete($event->id);
    }
}
