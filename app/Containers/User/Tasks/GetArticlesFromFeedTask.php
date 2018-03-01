<?php

namespace App\Containers\User\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;
use Vinkla\Hashids\Facades\Hashids;

class GetArticlesFromFeedTask extends Task
{
    public function run($transformedActivities)
    {
        $articleIds = [];
        foreach ($transformedActivities as $activity)
        {
            array_push($articleIds, Hashids::decode($activity['objectId'])[0]);
        }
        return Article::whereIn('id', $articleIds)->orderby('created_at', 'desc')->paginate();
    }
}
