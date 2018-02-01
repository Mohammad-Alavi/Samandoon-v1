<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Models\Event;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class SearchEventsAction extends Action
{
    public function run(DataTransporter $data)
    {
         return $this->call('Event@SearchEventsTask', [$data]);
    }
}
