<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Tasks\GetAuthenticatedUserNgoEventsTask;
use App\Ship\Parents\Actions\Action;

class GetAuthenticatedUserNgoEventsAction extends Action
{
    public function run()
    {
        $events = $this->call(GetAuthenticatedUserNgoEventsTask::class);

        return $events;
    }
}
