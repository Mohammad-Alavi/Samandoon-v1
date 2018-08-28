<?php

namespace App\Containers\Event\Tasks;

use App\Containers\Event\Data\Repositories\EventRepository;
use App\Containers\Event\Models\Event;
use App\Containers\Event\Notifications\CreateEventNotification;
use App\Containers\FCM\Models\UserFCMToken;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class CreateEventTask extends Task
{
    private $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data): Event
    {
        try {
            $event = $this->repository->create($data);
            if (array_key_exists('event_image', $data)) {
                $event->addMediaFromRequest('event_image')->toMediaCollection('event_image');
            }

            ////////////////////////////
            /// Send Notification to followers
            //////////////////////////////
            $userArray = [];
            foreach ($event->ngo->subscribers()->get() as $user) {
                if ($user->id !== $event->ngo->user->id) {
                    $user->notifyNow(new CreateEventNotification(['ngo' => $event->ngo, 'event' => $event]), ['database']);
                    array_push($userArray, $user->id);
                }
            }

            $optionBuilder = new OptionsBuilder();
            $optionBuilder->setTimeToLive(60 * 20);

            $notificationBuilder = new PayloadNotificationBuilder('سمندون');
            $notificationBuilder->setBody('سمن' . '"' . $event->ngo->name . '"' . ' یک رخداد جدید ارسال کرد ')
                ->setSound('default');

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

            return $event;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to create new Event' . $exception->getMessage());
        }
    }
}