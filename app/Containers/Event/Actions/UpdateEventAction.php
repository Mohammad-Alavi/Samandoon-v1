<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Models\Event;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;
use Vinkla\Hashids\Facades\Hashids;

class UpdateEventAction extends Action
{
    public function run(Request $request)
    {
        // throw exception if event is not found
        $event = Event::find($request->id);
        throw_unless(count($event) > 0 ? true : false, new NotFoundException('Event not found.'));

        $request->hasFile('banner_image') ? $banner_image = $request->banner_image->storeAs(Hashids::encode($event->ngo->user->id), 'event_banner.' . $request->banner_image->getClientOriginalExtension(), 'public') : $banner_image = null;
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

        $event = $this->call('Event@UpdateEventTask', [$eventData, $event]);

        return $event;
    }
}
