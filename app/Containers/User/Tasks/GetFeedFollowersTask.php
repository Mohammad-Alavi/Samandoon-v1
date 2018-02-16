<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use GetStream\Stream\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Vinkla\Hashids\Facades\Hashids;

class GetFeedFollowersTask extends Task
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(User $user)
    {
        // create feed
        $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
        // return who followed this user's ngo
        $userFeed = $client->feed('ngo', $user->ngo->getHashedKey());

        $results = $userFeed->followers();
        $followersIdArray = [];
        foreach ($results['results'] as $followers) {
            array_push($followersIdArray, Hashids::decode(str_replace('user:', '', $followers['feed_id'])));
        }

        return new LengthAwarePaginator($this->repository->findWhereIn('id', $followersIdArray),count($followersIdArray),1,1);
    }
}