<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Tasks\UpdateEventTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;

class UpdateEventAction extends Action
{
    public function run(Request $request)
    {
        $request->hasFile('event_photo') ? $photo_path = $request->file('event_photo')->store('event_photo') : $photo_path = null;
        $eventData = [
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => Carbon::createFromFormat('YmdHiT', $request->event_date),
            'photo_path' => $photo_path,
            'location' => $request->location,
        ];

        // remove null values and their keys
        $eventData = array_filter($eventData);

        $event = $this->call(UpdateEventTask::class, [$eventData, $request->id]);

        return $event;
    }
}
