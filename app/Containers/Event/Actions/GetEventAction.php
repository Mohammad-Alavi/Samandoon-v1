<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Models\Event;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetEventAction extends Action
{
    public function run(Request $request): Event
    {
        return $this->call('Event@FindEventByIdTask', [$request->id]);
    }
}
