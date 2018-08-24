<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;

class SearchArticlesTask extends Task
{
    public function run(array $request, $limit = 10)
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

        $ngos = Ngo::where($whereFilter);
        if (!empty($subjectsArray)) {
            $ngos->whereHas('subjects', function ($query) use ($subjectsArray) {
                $query->whereIn('subject_id', $subjectsArray);
            });;
        }

        $ngos = $ngos->get();
        $ngoIdArray = [];
        foreach ($ngos as $ngo) {
            $ngoIdArray[] = $ngo->id;
        }

        $articles = Article::whereIn('ngo_id', $ngoIdArray);

        if (array_key_exists('q', $request) && $request['q'] != '') {
            $result = Article::Search(ConvertNGONameFromArabicToPersianTask::arabicToPersian($request['q']))->constrain($articles)->paginate($limit);
        } else {
            $result = $articles->orderBy('created_at', 'desc')->paginate($limit);
        }

        return $result;
    }
}
