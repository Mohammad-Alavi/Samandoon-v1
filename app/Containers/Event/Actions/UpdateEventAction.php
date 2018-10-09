<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Event\Models\Event;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
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
//            'description',
            'city',
            'province',
            'address',
            'lat',
            'long',
            'event_image',
            'event_date',
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

        return Apiato::call('Event@UpdateEventTask', [$request->id, $data]);
    }
}
