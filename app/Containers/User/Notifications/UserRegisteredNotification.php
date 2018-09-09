<?php

namespace App\Containers\User\Notifications;

use App\Containers\User\Models\User;
use App\Ship\Parents\Notifications\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegisteredNotification extends Notification
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
            'doer_id' => $notifiable->id,
            'doer_name' => $notifiable->first_name,
            'object_id' => null,
            'object_text' => null,
        ];
    }

//    public function toArray($notifiable)
//    {
//        return [
//            'doer_id' => $this->notification->id,
//            'doer_name' => $this->notification->first_name,
//            'object_id' => $notifiable->ngo->id,
//            'object_text' => $notifiable->ngo->name,
//        ];
//    }
}
