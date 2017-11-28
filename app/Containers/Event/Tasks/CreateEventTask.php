<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Exceptions\EventCreationFailedException;
use App\Containers\Event\Exceptions\UserDontHaveNgoException;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\App;
use Vinkla\Hashids\Facades\Hashids;

class CreateEventTask extends Task
{
    /**
     * @param Request $request
     * @param $ngo
     * @return mixed
     */
    public function run(Request $request, $ngo)
    {
        if (!$ngo){
            throw (new UserDontHaveNgoException);
        }
        else {
            $title = $request->input('title');
            $description = $request->input('description');
            $event_date = Carbon::createFromFormat('YmdHiT', $request->input('event_date'));
            $location = $request->input('location');
            $request->hasFile('banner_image') ? $banner_image = $request->hasFile('banner_image')->store(Hashids::encode($ngo->user->id) . '/' . Hashids::encode($ngo->id) . '/event_images', 'public') : $banner_image = null;

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