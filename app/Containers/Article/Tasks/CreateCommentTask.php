<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Exceptions\Exception;
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
            DB::commit();
//            OneSignal::sendNotificationUsingTags(
//                $user->first_name . ' برای نوشته شما دیدگاهی نوشت',
//                array(["field" => "email", "relation" => "=", "value" => 'm.alavi1990@gmail.com']), 'www.samandoon.ngo/article/' . $article->getHashedKey());

            $data = [
                'comment' => $comment,
                'ngo'   => $article->ngo
            ];
        return $data;
        }
    }
}
