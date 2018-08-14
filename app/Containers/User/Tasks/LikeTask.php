<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Containers\User\Notifications\LikedNotification;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Models\Model;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\DB;

class LikeTask extends Task
{
    public function run(User $user, Model $target)
    {
        try {
            DB::beginTransaction();
            if (!$is_liked = $user->hasLiked($target)) {
                $user->like($target);
                $is_liked = true;
                switch (class_basename($target)) {
                    case 'Article':
                        $user->notifyNow(new LikedNotification($target), ['database', 'fcm']);
                }
            }
        } catch (Exception $exception) {
            DB::rollBack();
            throw new UpdateResourceFailedException('Failed to like the specified resource.');
        } finally {
            DB::commit();
            return ['user' => $user, 'target' => $target, 'is_liked' => $is_liked];
//        return new JsonResponse(class_basename($user) . ' (' . $user->getHashedKey() . ') liked ' . class_basename($target) . ' (' . $target->getHashedKey() . ').', 200);
        }
    }
}