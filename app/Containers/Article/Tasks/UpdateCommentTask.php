<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Tasks\Task;

class UpdateCommentTask extends Task
{
    public function run(Article $article, $comment_id, string $commentBody)
    {
        $comment = $article->updateComment($comment_id, [
            'body' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($commentBody)
        ]);
        if ($comment) {
            return $article->comments()->find($comment_id);
        }
    }
}
