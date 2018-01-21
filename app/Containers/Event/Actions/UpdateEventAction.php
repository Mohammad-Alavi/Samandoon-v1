<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;

class UpdateEventAction extends Action
{
    public function run(Request $request)
    {
        // throw exception if event is not found
        $event = Event::find($request->id);
        throw_unless(count($event) > 0 ? true : false, new NotFoundException('Event not found.'));

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
            'event_image',
            'event_date',
            'location',
        ]);

        $event = $this->call('Event@UpdateEventTask', [$request->id, $data]);

        return $event;
    }
}
