<?php

namespace App\Containers\Article\Tasks;

use App\Containers\Article\Data\Repositories\ArticleRepository;
use App\Containers\Article\Models\Article;
use App\Containers\Article\Notifications\CreateArticleNotification;
use App\Containers\FCM\Models\UserFCMToken;
use App\Containers\User\Notifications\CommentedNotification;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class CreateArticleTask extends Task
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data): Article
    {
        try {
            DB::beginTransaction();
            $article = $this->repository->create($data);
            if (array_key_exists('article_image', $data)) {
                $article->addMediaFromRequest('article_image')->toMediaCollection('article_image');
            }
        } catch (Exception $exception) {
            DB::rollBack();
            throw new CreateResourceFailedException('Failed to create new Article');
        } finally {
            DB::commit();

            ////////////////////////////
            /// Send Notification to followers
            //////////////////////////////
            $userArray = [];
            foreach ($article->ngo->subscribers()->get() as $user) {
                if ($user->id !== $article->ngo->user->id) {
                    $user->notifyNow(new CreateArticleNotification(['ngo' => $article->ngo, 'article' => $article]), ['database']);
                    array_push($userArray, $user->id);
                }
            }

            $optionBuilder = new OptionsBuilder();
            $optionBuilder->setTimeToLive(60 * 20);

            $notificationBuilder = new PayloadNotificationBuilder('سمندون');
            $notificationBuilder->setBody('سمن' . '"' . $article->ngo->name . '"' . ' یک نوشته جدید ارسال کرد ')
                ->setSound('default')->setIcon('notification_icon_article');

            $dataBuilder = new PayloadDataBuilder();
            $dataBuilder->addData(['a_data' => 'my_data']);

            $option = $optionBuilder->build();
            $notification = $notificationBuilder->build();
            $data = $dataBuilder->build();

            $tokens = UserFCMToken::whereIn('user_id', $userArray)->pluck('android_fcm_token')->toArray();
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
            return $article;
        }
    }
}
