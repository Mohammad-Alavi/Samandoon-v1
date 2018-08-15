<?php

namespace App\Containers\User\Tasks;

use App\Containers\FCM\Models\UserFCMToken;
use App\Containers\NGO\Models\Ngo;
use App\Containers\User\Models\User;
use App\Containers\User\Notifications\FollowedNotification;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class SubscribeTask extends Task
{
    public function run(User $user, Ngo $target)
    {
        try {
            DB::beginTransaction();
            $user->subscribe($target->id, Ngo::class);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new UpdateResourceFailedException('Failed to subscribe to the specified resource');
        } finally {
            DB::commit();
            $target->user->notifyNow(new FollowedNotification($user), ['database']);

            $optionBuilder = new OptionsBuilder();
            $optionBuilder->setTimeToLive(60*20);

            $notificationBuilder = new PayloadNotificationBuilder('سمندون');
            $notificationBuilder->setBody('[' . $user->first_name . ']' . ' سمن شما را دنبال کرد')
                ->setSound('default');

            $dataBuilder = new PayloadDataBuilder();
            $dataBuilder->addData(['a_data' => 'my_data']);

            $option = $optionBuilder->build();
            $notification = $notificationBuilder->build();
            $data = $dataBuilder->build();

            $tokens = UserFCMToken::where('user_id', $target->user->id)->pluck('android_fcm_token')->toArray();
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

            return new JsonResponse([
                'followers_count' => $target->subscribers()->count(),
                'is_following' => $user->hasSubscribed($target->id, Ngo::class)
            ], 200);
        }
    }
}
