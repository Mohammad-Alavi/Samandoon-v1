<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;

class CreateEventAction extends Action
{
    public function run(Request $request): Event
    {
        // throw 404 exception if user doesn't have a ngo
        $ngo = $this->call('Authentication@GetAuthenticatedUserTask')->ngo;
        throw_unless($ngo->id, new NotFoundException('User don\'t have a NGO.'));

        // manipulated data of request
        $fixedData = [
            'event_date' => Carbon::createFromFormat('YmdHiT', $request->event_date),
            'ngo_id' => $ngo->id,
        ];

        // add some manipulated request data to request
        $request->request->add($fixedData);

        $data = $request->sanitizeInput([
            'title',
            'description',
            'location',
            'event_image',
            'event_date',
            'ngo_id'
        ]);

        return $this->call('Event@CreateEventTask', [$data]);
    }
}
