<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Tasks\CreateEventTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateEventAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     * @throws placeholder
     */
    public function run(Request $request)
    {
        $event = $this->call(CreateEventTask::class, [$request]);

        return $event;
    }
}
