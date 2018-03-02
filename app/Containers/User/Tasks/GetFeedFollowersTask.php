<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use GetStream\Stream\Client;
use Vinkla\Hashids\Facades\Hashids;

class GetFeedFollowersTask extends Task
{
    public function run($request, User $user)
    {
        // create feed
        $client = new Client(config('getStream.stream_api_key'), config('getStream.stream_api_secret'));
        // return who followed this user's ngo
        $userFeed = $client->feed('ngo', $user->ngo->getHashedKey());

        $results = $userFeed->followers();
        $followersIdArray = [];
        foreach ($results['results'] as $followers) {
            array_push($followersIdArray, Hashids::decode(str_replace('user:', '', $followers['feed_id'])));
        }

        return User::whereIn('id', $followersIdArray)->paginate($request->limit ? $request->limit : 10);
    }
}