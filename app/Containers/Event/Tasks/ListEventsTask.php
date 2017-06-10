<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class ListEventsTask extends Task
{
    /**
     *
     */
    // You can add criteria and parameters to sort and limit the results
    // for reference look at "ListUsersTask" in
    // App\Containers\User\Tasks
    // Todo Add criteria and parameters
    public function run()
    {
        $eventRepository = App::make(EventRepository::class);

        return $eventRepository->paginate();
    }
}
