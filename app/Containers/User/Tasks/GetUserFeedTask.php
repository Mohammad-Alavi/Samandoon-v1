<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use GetStream\Stream\Client;
use Illuminate\Validation\UnauthorizedException;

class GetUserFeedTask extends Task
{
    public function run(User $user)
    {
        // check the ownership of the resource
        throw_if(\Auth::user()->id !== $user->id, new UnauthorizedException('You are not the owner of this resource'));
        // create feed
        $client = new Client(config('getStream.stream_api_key'), config('getStream.stream_api_secret'));
        $userFeed = $client->feed('user', $user->getHashedKey());

        return $userFeed->getActivities();
    }
}
