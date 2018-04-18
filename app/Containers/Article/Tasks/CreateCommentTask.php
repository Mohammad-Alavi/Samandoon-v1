<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;

class CreateCommentTask extends Task
{
    public function run(User $user, Article $article, string $commentBody, $parent_id = null)
    {
        try {
            is_null($parent_id) ? $commentParent = null : $commentParent = $article->comments()->findOrFail($parent_id);
        } catch (\Exception $exception) {
            throw new NotFoundException('Parent id not found');
        }
        $comment = $article->comment([
            'title' => null,
            'body' => $commentBody,
        ], $user, $commentParent);

        return $comment;
    }
}
