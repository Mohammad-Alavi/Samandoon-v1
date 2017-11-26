<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\ImageRepository;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class AddImageToEventTask extends Task
{
    public function run(Request $request)
    {
        $image = $request->file('image')->store('event_image/' . $request->event_id, 'public');
        return App::make(ImageRepository::class)->create([
            'image' => $image,
            'event_id' => $request->event_id,
        ]);
    }
}
