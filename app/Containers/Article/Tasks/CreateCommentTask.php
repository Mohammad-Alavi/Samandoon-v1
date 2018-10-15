<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\FCM\Models\UserFCMToken;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Containers\User\Models\User;
use App\Containers\User\Notifications\CommentedNotification;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\DB;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class CreateCommentTask extends Task
{
    public function run(User $user, Article $article, string $commentBody, $parent_id = null)
    {
        try {
            is_null($parent_id) ? $commentParent = null : $commentParent = $article->comments()->findOrFail($parent_id);
            DB::beginTransaction();
            $comment = $article->comment([
                'title' => null,
                'body' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($commentBody),
            ], $user, $commentParent);
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new NotFoundException('Parent id not found');
        } finally {
            DB::commit();

            // send notification only when user is not the owner of the article
            if ($user->id !== $article->ngo->user->id) {

                $article->ngo->user->notifyNow(new CommentedNotification(['user' => $user, 'comment' => $comment]), ['database']);

                $optionBuilder = new OptionsBuilder();
                $optionBuilder->setTimeToLive(60 * 20);

                $notificationBuilder = new PayloadNotificationBuilder('سمندون');
                $notificationBuilder->setBody('[' . $user->first_name . ']' . ' نظر داد: ' . '"' . $comment->body . '"')
                    ->setSound('default')->setIcon('notification_icon_comment')->setColor('#2195f1');

                $dataBuilder = new PayloadDataBuilder();
                $dataBuilder->addData(['a_data' => 'my_data']);

                $option = $optionBuilder->build();
                $notification = $notificationBuilder->build();
                $data = $dataBuilder->build();

                $tokens = UserFCMToken::where('user_id', $article->ngo->user->id)->pluck('android_fcm_token')->toArray();
                if (!empty($tokens)) {

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
                }
            }

            $data = [
                'comment' => $comment,
                'ngo' => $article->ngo
            ];
            return $data;
        }
    }
}
