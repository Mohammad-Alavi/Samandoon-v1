<?php

namespace App\Containers\NotificationCenter\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use DB;

class GetNotificationsTask extends Task
{
    public function run($limit, User $user)
    {
        $unreadNotifications = $user->notifications->paginate($limit ? $limit : 20);
//        $user->unreadNotifications->markAsRead();
        return $unreadNotifications;
    }
}
