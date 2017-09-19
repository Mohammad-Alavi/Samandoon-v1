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
        $event = $this->call(FindEventByIdTask::class, [$request->id]);

        $this->call(DeleteEventTask::class, [$event]);

        return $event;
    }
}
