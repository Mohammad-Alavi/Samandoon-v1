<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Parents\Tasks\Task;

class DeleteCommentTask extends Task
{
    public function run(Article $article, $comment_id)
    {
        return $article->deleteComment($comment_id);
    }
}
