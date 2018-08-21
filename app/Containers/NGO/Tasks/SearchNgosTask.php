<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Tasks\Task;

class SearchNgosTask extends Task
{
    public function run(array $request)
    {
        $whereFilter = array();

        foreach ($request as $key => $value) {
            //do something with your $key and $value;
            if ($key != 'q' && $key != 'subject') {
                $whereFilter[] = [$key, '=', $value];
            }

            if ($key == 'subject') {
                $subjectsArray = json_decode($value, true);
            } else {
                $subjectsArray = [];
            }
        }

        $filtered = Ngo::where($whereFilter);
        if (!empty($subjectsArray)) {
            $filtered->whereHas('subjects', function ($query) use ($subjectsArray) {
                $query->whereIn('subject_id', $subjectsArray);
            });;
        }

        if (array_key_exists('q', $request) && $request['q'] != '') {
            $result = Ngo::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->constrain($filtered)->paginate();
        } else {
            $result = $filtered->paginate();
        }

        return $result;
    }
}
