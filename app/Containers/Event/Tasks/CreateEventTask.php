<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Exceptions\EventCreationFailedException;
use App\Containers\Event\Exceptions\UserDontHaveNgoException;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\App;

class CreateEventTask extends Task
{
    /**
     * @param Request $request
     * @param $ngo
     * @return mixed
     */
    public function run(Request $request, $ngo)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $event_date = Carbon::createFromFormat('YmdHiT', $request->input('event_date'));
        $location = $request->input('location');
        $request->hasFile('banner_image') ? $banner_image = $request->file('banner_image')->store('event_image/banner_image', 'public') : $banner_image = null;

        if (!$ngo){
            throw (new UserDontHaveNgoException);
        }
        else {
            try {
                // create a new event
                $event = App::make(EventRepository::class)->create([
                    'title' => $title,
                    'description' => $description,
                    'event_date' => $event_date,
                    'location' => $location,
                    'banner_image' => $banner_image,
                    'ngo_id' => $ngo->id,
                ]);
            } catch (Exception $e) {
                throw (new EventCreationFailedException);
            }
        }

        return $event;
    }
}
