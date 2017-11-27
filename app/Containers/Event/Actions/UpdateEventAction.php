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
        $request->hasFile('banner_image') ? $banner_image = $request->file('banner_image')->store('event_image/banner_image', 'public') : $banner_image = null;
        $request->input('event_date') ? $event_date = Carbon::createFromFormat('YmdHiT', $request->input('event_date')) : $event_date = null;

        $eventData = [
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $event_date,
            'location' => $request->location,
            'banner_image' => $banner_image,
        ];

        // remove null values and their keys
        $eventData = array_filter($eventData);

        $event = $this->call('Event@UpdateEventTask', [$eventData, $request->id]);

        return $event;
    }
}
