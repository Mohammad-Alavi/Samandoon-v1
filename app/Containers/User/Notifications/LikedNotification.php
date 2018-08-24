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
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'doer_id' => $this->notification['user']['id'],
            'doer_name' => $this->notification['user']['first_name'],
            'object_id' => $this->notification['article']['id'],
            'object_text' => $this->notification['article']['text'],
        ];
    }
}
