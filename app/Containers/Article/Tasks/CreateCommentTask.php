<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\User\Models\User;
use App\Containers\User\Notifications\CommentedNotification;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\DB;

class CreateCommentTask extends Task
{
    public function run(User $user, Article $article, string $commentBody, $parent_id = null)
    {
        try {
            is_null($parent_id) ? $commentParent = null : $commentParent = $article->comments()->findOrFail($parent_id);
            DB::beginTransaction();
            $comment = $article->comment([
                'title' => null,
                'body' => $commentBody,
            ], $user, $commentParent);
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new NotFoundException('Parent id not found');
        } finally {
            $article->ngo->user->notifyNow(new CommentedNotification(['user' => $user, 'comment' => $comment]), ['database', 'fcm']);
            $data = [
                'comment' => $comment,
                'ngo'   => $article->ngo
            ];
        return $data;
        }
    }
}
