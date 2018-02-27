<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Models\Model;
use App\Ship\Parents\Tasks\Task;
use OneSignal;

class ToggleLikeTask extends Task
{
    public function run(User $user, Model $target)
    {
        try {
            $user->toggleLike($target);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Failed to like/unlike the specified resource.');
        }

        if ($is_liked = $user->hasLiked($target)) {
            switch (class_basename($target)) {
                case 'Article':
                    OneSignal::sendNotificationUsingTags(
                        $user->first_name . ' نوشته شما را پسندید',
                        array(["field" => "email", "relation" => "=", "value" => $target->ngo->user->email]), 'www.samandoon.ngo/article/' . $target->getHashedKey());
                    break;
            }
        }
        return ['user' => $user, 'target' => $target, 'is_liked' => $is_liked];
    }
}
