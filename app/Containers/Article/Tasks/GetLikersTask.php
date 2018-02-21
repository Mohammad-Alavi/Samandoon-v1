<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;

class GetLikersTask extends Task
{
    public function run(Article $article)
    {
        return $article->likers()->paginate(10);
    }
}
