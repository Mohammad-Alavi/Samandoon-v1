<?php

namespace App\Containers\User\Notifications;

use App\Ship\Parents\Notifications\Notification;
use NotificationChannels\FCM\FCMMessage;

/**
 * Class CommentedNotification
 */
class CommentedNotification extends Notification
{
    protected $notification;

    public function __construct($notification)
    {
        $this->notification = $notification;
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
            'object_id' => $this->notification['comment']['commentable_id'],
            'object_text' => $this->notification['comment']['body'],
        ];
    }
}
