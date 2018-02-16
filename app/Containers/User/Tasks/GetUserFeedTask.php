<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use GetStream\Stream\Client;

class GetUserFeedTask extends Task
{
    public function run(User $user)
    {
        // create feed
        $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
        $userFeed = $client->feed('user', $user->getHashedKey());

        return $userFeed->getActivities();
    }
}
