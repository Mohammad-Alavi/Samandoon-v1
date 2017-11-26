<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Tasks\FindEventByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetEventAction extends Action
{
    public function run(Request $request)
    {
        $event = $this->call('Event@FindEventByIdTask', [$request->id]);

        return $event;
    }
}
