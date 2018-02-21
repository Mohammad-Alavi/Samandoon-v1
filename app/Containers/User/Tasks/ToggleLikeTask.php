<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Models\Model;
use App\Ship\Parents\Tasks\Task;
use Berkayk\OneSignal\OneSignalClient;
use Illuminate\Http\JsonResponse;

class ToggleLikeTask extends Task
{
    public function run(User $user, Model $target)
    {
        try {
            $user->toggleLike($target);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Failed to like/unlike the specified resource.');
        }

        if ($user->hasLiked($target)) {
            $OneSignalClient = new OneSignalClient(
                config('onesignal.app_id'),
                config('config.rest_api_key'),
                config('config.user_auth_key'));

            switch (class_basename($target)) {
                case 'Article':
                    $OneSignalClient->sendNotificationToUser($user->first_name . " نوشته شما را پسندید", 'e7d2b1fd-560b-48e5-a8bd-0790fe954fab', $url = null, $data = null, $buttons = null, $schedule = null);
                    return new JsonResponse(class_basename($user) . ' (' . $user->getHashedKey() . ') liked ' . class_basename($target) . ' (' . $target->getHashedKey() . ').', 200);
                case 'Event':
                    $OneSignalClient->sendNotificationToUser($user->first_name . " رخداد شما را پسندید", 'e7d2b1fd-560b-48e5-a8bd-0790fe954fab', $url = null, $data = null, $buttons = null, $schedule = null);
                    return new JsonResponse(class_basename($user) . ' (' . $user->getHashedKey() . ') liked ' . class_basename($target) . ' (' . $target->getHashedKey() . ').', 200);
            }
        } else {
            return new JsonResponse(class_basename($user) . ' (' . $user->getHashedKey() . ') unliked ' . class_basename($target) . ' (' . $target->getHashedKey() . ').', 200);
        }
    }
}
