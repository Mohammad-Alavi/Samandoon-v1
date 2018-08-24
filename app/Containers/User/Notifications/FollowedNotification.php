<?php

namespace App\Containers\User\Notifications;

use App\Ship\Parents\Notifications\Notification;
use NotificationChannels\FCM\FCMMessage;

/**
 * Class FollowedNotification
 */
class FollowedNotification extends Notification
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
            'doer_id' => $this->notification->id,
            'doer_name' => $this->notification->first_name,
            'object_id' => $notifiable->ngo->id,
            'object_text' => $notifiable->ngo->name,
        ];
    }
}
