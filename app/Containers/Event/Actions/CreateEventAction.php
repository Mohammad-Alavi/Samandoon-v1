<?php

namespace App\Containers\Event\Actions;

use App\Containers\Event\Models\Event;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;

class CreateEventAction extends Action
{
    public function run(Request $request): Event
    {
        // throw 404 exception if user doesn't have a ngo
        $ngo = $this->call('Authentication@GetAuthenticatedUserTask')->ngo;
        throw_unless($ngo->id, new NotFoundException('User don\'t have a NGO.'));

        // manipulated data of request
        $fixedData = [
            'event_date' => Carbon::createFromFormat('YmdHiT', $request->event_date),
            'ngo_id' => $ngo->id,
        ];

        // add some manipulated request data to request
        $request->request->add($fixedData);

        $data = $request->sanitizeInput([
            'title',
//            'description',
            'city',
            'province',
            'address',
            'lat',
            'long',
            'event_image',
            'event_date',
            'ngo_id'
        ]);

        if (array_key_exists('title', $data)) {
            $data['title'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($data['title']);
        }

        if (array_key_exists('description', $data)) {
            $data['description'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($data['description']);
        }

        if (array_key_exists('address', $data)) {
            $data['address'] = ConvertNGONameFromArabicToPersianTask::arabicToPersian($data['address']);
        }

        return $this->call('Event@CreateEventTask', [$data]);
    }
}
