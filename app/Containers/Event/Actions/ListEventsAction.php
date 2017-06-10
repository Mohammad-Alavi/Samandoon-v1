<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Tasks\ListEventsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListEventsAction extends Action
{
    public function run(Request $request)
    {
        $events = $this->call(ListEventsTask::class, [$request]);

        return $events;
    }
}
