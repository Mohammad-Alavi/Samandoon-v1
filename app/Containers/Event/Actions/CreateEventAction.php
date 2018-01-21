<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;

class CreateEventAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('Authentication@GetAuthenticatedUserTask')->ngo;
        if (!$ngo) {
            throw new NotFoundException('User don\'t have a NGO.');
        }

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

        $event = Apiato::call('Event@CreateEventTask', [$data]);

        return $event;
    }
}
