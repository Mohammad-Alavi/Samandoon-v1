<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use GetStream\Stream\Client;

class GetFeedFollowersTask extends Task
{
    public function run(User $user)
    {
        // create feed
        $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
        // return who folloed this user's ngo
        $userFeed = $client->feed('ngo', $user->ngo->getHashedKey());

        return $userFeed->followers();
    }
}
