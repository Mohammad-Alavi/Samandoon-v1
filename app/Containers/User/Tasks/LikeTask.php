<?php

namespace App\Containers\User\Tasks;

use App\Containers\FCM\Models\UserFCMToken;
use App\Containers\User\Models\User;
use App\Containers\User\Notifications\LikedNotification;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Models\Model;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\DB;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

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
                        if ($user->id == $target->ngo->user->id) {
                            break;
                        }
                        $user->notifyNow(new LikedNotification($target), ['database']);
                        $optionBuilder = new OptionsBuilder();
                        $optionBuilder->setTimeToLive(60 * 20);

                        $notificationBuilder = new PayloadNotificationBuilder('سمندون');
                        $notificationBuilder->setBody('[' . $user->first_name . ']' . ' نوشته شما را پسندید')
                            ->setSound('default');

                        $dataBuilder = new PayloadDataBuilder();
                        $dataBuilder->addData(['a_data' => 'my_data']);

                        $option = $optionBuilder->build();
                        $notification = $notificationBuilder->build();
                        $data = $dataBuilder->build();

                        $tokens = UserFCMToken::where('user_id', $target->ngo->user->id)->pluck('android_fcm_token')->toArray();
//                        if (!emptyArray($tokens)) {

                        $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);

                        $downstreamResponse->numberSuccess();
                        $downstreamResponse->numberFailure();
                        $downstreamResponse->numberModification();

                        //return Array - you must remove all this tokens in your database
                        $downstreamResponse->tokensToDelete();

                        //return Array (key : oldToken, value : new token - you must change the token in your database )
                        $downstreamResponse->tokensToModify();

                        //return Array - you should try to resend the message to the tokens in the array
                        $downstreamResponse->tokensToRetry();

                        // return Array (key:token, value:errror) - in production you should remove from your database the tokens
//                        }
                        break;
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