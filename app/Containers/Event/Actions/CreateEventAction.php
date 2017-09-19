<?php

namespace App\Containers\Event\Actions;

use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\Event\Tasks\CreateEventTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateEventAction extends Action
{
    public function run(Request $request)
    {
        $ngo = $this->call(GetAuthenticatedUserTask::class)->ngo;
        $event = $this->call(CreateEventTask::class, [$request, $ngo]);

        return $event;
    }
}
