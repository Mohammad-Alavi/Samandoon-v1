<?php

namespace App\Containers\Event\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Event\Models\Event;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Tasks\Task;

class SearchEventsTask extends Task
{
    public function run(array $request, $limit = 10)
    {
        $whereFilter = array();
        $subjectsArray = [];
        foreach ($request as $key => $value) {
            if ($key == 'area_of_activity') {
                $whereFilter[] = [$key, '=', $value];
            }

            if ($key == 'subject') {
                $subjectsArray = json_decode($value, true);
            }
        }

        // here we get filtered ngos
        $filteredNgos = [];
        if (!empty($subjectsArray) && !empty($whereFilter)) {
            $filteredNgos = Ngo::where($whereFilter)->whereHas('subjects', function ($query) use ($subjectsArray) {
                $query->whereIn('subject_id', $subjectsArray);
            })->get();
        }
        if (!empty($subjectsArray) && empty($whereFilter)) {
            $filteredNgos = Ngo::whereHas('subjects', function ($query) use ($subjectsArray) {
                $query->whereIn('subject_id', $subjectsArray);
            })->get();
        }
        if (empty($subjectsArray) && !empty($whereFilter)) {
            $filteredNgos = Ngo::where($whereFilter)->get();
        }

        $eventIdArray = [];
        foreach ($filteredNgos as $ngo) {
            foreach ($ngo->events as $event) {
                $eventIdArray[] = $event->id;
            }
        }

        // get city and province for event
        $whereFilterEvent = array();
        foreach ($request as $key => $value) {
            if ($key == 'city' || $key == 'province') {
                $whereFilterEvent[] = [$key, '=', $value];
            }
        }

        if (!empty($whereFilterEvent)) {
            $filteredEvent = Event::where($whereFilterEvent)->get();
            foreach ($filteredEvent as $event) {
                $eventIdArray[] = $event->id;
            }
        }

        $eventIdArray = array_unique($eventIdArray);

        $filteredEvent2 = Event::whereIn('id', $eventIdArray);
        if ($filteredEvent2->get()->count() <= 0)
            $filteredEvent2 = Event::orderBy('created_at', 'asc');
        if (array_key_exists('q', $request) && $request['q'] != '') {
            $result = Event::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->constrain($filteredEvent2)->paginate($limit);
        } else {
            $result = $filteredEvent2->paginate($limit);
        }

        return $result;
    }
}