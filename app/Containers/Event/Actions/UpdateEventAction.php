<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Event\Models\Event;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;

class UpdateEventAction extends Action
{
    public function run(Request $request): Event
    {
        Apiato::call('Event@FindEventByIdTask', [$request->id]);

        $request->input('event_date') ?
            $event_date = Carbon::createFromFormat('YmdHiT', $request->input('event_date')) :
            $event_date = null;
        // manipulated data of request
        $fixedData = [
            'event_date' => $event_date
        ];

        // add some manipulated request data to request
        if ($event_date) {
            $request->request->add($fixedData);
        }

        $data = $request->sanitizeInput([
            'title',
            'description',
            'city',
            'province',
            'address',
            'lat',
            'long',
            'event_image',
            'event_date',
        ]);

        return Apiato::call('Event@UpdateEventTask', [$request->id, $data]);
    }
}
