<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Models\Event;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Database\Eloquent\Collection;

class SearchEventsTask extends Task
{
    public function run(array $request, $limit = 10)
    {
        $whereFilter = [];
        $subjectsArray = [];
        $result = Collection::class;
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

        // get city and province for event
        $whereFilterEvent = array();
        foreach ($request as $key => $value) {
            if ($key == 'city' || $key == 'province') {
                $whereFilterEvent[] = [$key, '=', $value];
            }
        }

        $eventIdArray = [];
        // no filter
        if (empty($filteredNgos) && empty($whereFilterEvent)) {
            dd(10);
            if (array_key_exists('q', $request) && $request['q'] != '') {
                $this->$result = Event::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->paginate($limit);
            }
            // return all events sorted
            if (!array_key_exists('q', $request) || (array_key_exists('q', $request) && $request['q'] == '')) {
                $this->$result = Event::orderBy('created_at', 'desc')->paginate($limit);
            }
        } // ngo filter
        else if (!empty($filteredNgos) && empty($whereFilterEvent)) {
            // get ID's of events of ngos
            foreach ($filteredNgos as $ngo) {
                foreach ($ngo->events as $event) {
                    $eventIdArray[] = $event->id;
                }
            }
            $filteredEvent = Event::whereIn('id', $eventIdArray);

            if (array_key_exists('q', $request) && $request['q'] != '') {
                $this->$result = Event::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->constrain($filteredEvent)->paginate($limit);
            }
            if (!array_key_exists('q', $request) || (array_key_exists('q', $request) && $request['q'] == '')) {
                $this->$result = $filteredEvent->orderBy('created_at', 'desc')->paginate($limit);
            }
        } // event filter
        else if (empty($filteredNgos) && !empty($whereFilterEvent)) {
            $filteredEvent = Event::where($whereFilterEvent);
            if (array_key_exists('q', $request) && $request['q'] != '') {
                $this->$result = Event::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->constrain($filteredEvent)->paginate($limit);
            }
            if (!array_key_exists('q', $request) || (array_key_exists('q', $request) && $request['q'] == '')) {
                $this->$result = $filteredEvent->orderBy('created_at', 'desc')->paginate($limit);;
            }
        } // ngo and event filter
        else if (!empty($filteredNgos) && !empty($whereFilterEvent)) {
            // get ID's of events of ngos
            foreach ($filteredNgos as $ngo) {
                foreach ($ngo->events as $event) {
                    $eventIdArray[] = $event->id;
                }
            }
            $filteredEvent = Event::whereIn('id', $eventIdArray);
            $filteredEvent = $filteredEvent->where($whereFilterEvent);
            if (array_key_exists('q', $request) && $request['q'] != '') {
                $this->$result = Event::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->constrain($filteredEvent)->paginate($limit);
            }
            if (!array_key_exists('q', $request) || (array_key_exists('q', $request) && $request['q'] == '')) {
                $this->$result = $filteredEvent->orderBy('created_at', 'desc')->paginate($limit);
            }
        }
        return $this->$result;
    }
}