<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetEventAction extends Action
{
    public function run(Request $request): Event
    {
        $event = Apiato::call('Event@FindEventByIdTask', [$request->id]);
        return $event;
    }
}
