<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Tasks\DeleteEventTask;
use App\Containers\Event\Tasks\FindEventByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteEventAction extends Action
{
    public function run(Request $request)
    {
        $event = $this->call('Event@FindEventByIdTask', [$request->id]);

        $this->call('Event@DeleteEventTask', [$event]);

        return $event;
    }
}
