<?php

namespace App\Containers\Article\Notifications;

use App\Ship\Parents\Notifications\Notification;

/**
 * Class CreateArticleNotification
 */
class CreateArticleNotification extends Notification
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
            'object_id' => $this->notification['article']['id'],
            'object_text' => $this->notification['article']['text'],
        ];
    }
}
