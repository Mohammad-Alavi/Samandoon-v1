<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;

class GetAllCommentsTask extends Task
{
    public function run(Article $article)
    {
        return $article->comments()->paginate(10);
    }
}
