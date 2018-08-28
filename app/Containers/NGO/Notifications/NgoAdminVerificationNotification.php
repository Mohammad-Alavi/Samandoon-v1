<?php

namespace App\Containers\NGO\Notifications;

use App\Ship\Parents\Notifications\Notification;

/**
 * Class NgoAdminVerificationNotification
 */
class NgoAdminVerificationNotification extends Notification
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
            'doer_id' => null,
            'doer_name' => null,
            'object_id' => $this->notification['ngo']['id'],
            'object_text' => $this->notification['ngo']['name'],
        ];
    }
}
