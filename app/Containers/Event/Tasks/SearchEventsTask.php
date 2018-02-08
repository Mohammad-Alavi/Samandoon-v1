<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Models\Event;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;

class SearchEventsTask extends Task
{
    public function run(DataTransporter $data)
    {
        return Event::Search($data->q)->paginate();
    }
}
