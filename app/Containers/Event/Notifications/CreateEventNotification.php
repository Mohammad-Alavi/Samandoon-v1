<?php

namespace App\Containers\Event\Notifications;

use App\Ship\Parents\Notifications\Notification;

/**
 * Class CreateEventNotification
 */
class CreateEventNotification extends Notification
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
            'doer_id' => $this->notification['ngo']['id'],
            'doer_name' => $this->notification['ngo']['name'],
            'object_id' => $this->notification['event']['id'],
            'object_text' => $this->notification['event']['title'],
        ];
    }
}
