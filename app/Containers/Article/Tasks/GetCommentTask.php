<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;

class GetCommentTask extends Task
{
    public function run(Article $article, $comment_id)
    {
        return $article->comments()->where('id', '=', $comment_id)->get();
    }
}