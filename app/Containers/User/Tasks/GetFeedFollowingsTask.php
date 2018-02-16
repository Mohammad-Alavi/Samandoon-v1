<?php

namespace App\Containers\User\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use GetStream\Stream\Client;
use Vinkla\Hashids\Facades\Hashids;

class GetFeedFollowingsTask extends Task
{
    public function run($request, User $user)
    {
        // create feed
        $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
        $userFeed = $client->feed('user', $user->getHashedKey());

        $results = $userFeed->following();
        $followingsIdArray = [];
        foreach ($results['results'] as $followings) {
            array_push($followingsIdArray, Hashids::decode(str_replace('ngo:', '', $followings['target_id'])));
        }

        return Ngo::whereIn('id', $followingsIdArray)->paginate($request->limit ? $request->limit : env('PAGINATION_LIMIT'));
    }
}
