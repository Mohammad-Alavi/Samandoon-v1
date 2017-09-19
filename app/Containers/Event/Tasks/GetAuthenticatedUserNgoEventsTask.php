<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Exceptions\UserNgoDontHaveEventsException;
use App\Containers\NGO\Exceptions\UserDontHaveNgoException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\Auth;

class GetAuthenticatedUserNgoEventsTask extends Task
{
    public function run()
    {
        $user = Auth::user();

        if (!$user->ngo) {
            throw new UserDontHaveNgoException();
        }
        $ngo = $user->ngo;

        if (!$ngo->events) {
            throw new UserNgoDontHaveEventsException();
        }
        $events = $ngo->events;

        return $events;
    }
}
