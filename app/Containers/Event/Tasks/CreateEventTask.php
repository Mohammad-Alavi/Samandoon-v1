<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Exceptions\EventCreationFailedException;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\App;

class CreateEventTask extends Task
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $event_date = $request->input('event_date');
        $request->hasFile('event_photo') ? $photo_path = $request->file('event_photo')->store('event_photo') : $photo_path = null;
        $location = $request->input('location');

        try {
            // create a new event
            $event = App::make(EventRepository::class)->create([
                'title'         =>  $title,
                'description'   =>  $description,
                'event_date'    =>  Carbon::createFromFormat('YmdHiT', $event_date),
                'photo_path'    =>  $photo_path,
                'location'      =>  $location,
            ]);
        } catch (Exception $e) {
            throw (new EventCreationFailedException);
        }

        return $event;
    }
}
