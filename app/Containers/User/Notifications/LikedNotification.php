<?php

namespace App\Containers\User\Notifications;

use App\Ship\Parents\Notifications\Notification;
use NotificationChannels\FCM\FCMMessage;

/**
 * Class LikedNotification
 */
class LikedNotification extends Notification
{
    protected $notification;

    public function __construct($notification)
    {
        $this->notification = $notification;
    }

    public function toArray($notifiable)
    {
        return [
            'subject' => 'سمندون',
            'body' => "{$notifiable->first_name} نوشته شما را پسندید",
            'url' => $notifiable->link
        ];
    }

    public function via($notifiable)
    {
        return ['fcm', 'database'];
    }

    public function toFCM($notifiable)
    {
//        $optionBuilder = new OptionsBuilder();
//        $optionBuilder->setTimeToLive(60*20);

        return (new FCMMessage())
            ->notification([
                'title' => 'سمندون',
                'body' => $notifiable->first_name . ' نوشته شما را پسندید',
//                'color' => '#664455',
//                https://firebase.google.com/docs/cloud-messaging/http-server-ref?authuser=1
            ]);
    }
}
