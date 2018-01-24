<?php

namespace App\Containers\Event\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListEventsAction extends Action
{
    public function run(Request $request)
    {
        return $this->call('Event@ListEventsTask', [$request]);;
    }
}
