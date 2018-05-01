<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;

class GetCommentTask extends Task
{
    public function run(Article $article, $comment_id)
    {
        try {
            $comment = $article->comments()->where('id', '=', $comment_id)->first();
        } catch (Exception $exception) {
        }
        throw_if(empty($comment->id), NotFoundException::class, 'Comment not found');
        return $comment;
    }
}