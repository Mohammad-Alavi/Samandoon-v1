<?php

namespace App\Containers\User\Tasks;

use App\Ship\Parents\Tasks\Task;
use GetStream\StreamLaravel\Facades\FeedManager;

class GetUserFeedTask extends Task
{
    public function run($id)
    {
        return FeedManager::getUserFeed($id);
    }
}
