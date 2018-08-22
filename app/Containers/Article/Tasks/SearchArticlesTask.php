<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;

class SearchArticlesTask extends Task
{
    public function run(array $request, $limit = 15)
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

        $filtered = $filtered->articles();

        if (array_key_exists('q', $request) && $request['q'] != '') {
            $result = Article::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->constrain($filtered)->paginate($limit);
        } else {
            $result = $filtered->paginate($limit);
        }

        return $result;
    }
}
