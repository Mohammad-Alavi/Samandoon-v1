<?php

namespace App\Containers\User\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use GetStream\Stream\Client;
use Vinkla\Hashids\Facades\Hashids;

class GetFeedFollowingsTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(User $user)
    {
        // create feed
        $client = new Client(env('STREAM_API_KEY'), env('STREAM_API_SECRET'));
        $userFeed = $client->feed('user', $user->getHashedKey());

        $results = $userFeed->following();
        $followingsIdArray = [];
        foreach ($results['results'] as $followings) {
            array_push($followingsIdArray, Hashids::decode(str_replace('ngo:', '', $followings['target_id'])));
        }

        return $this->repository->findWhereIn('id', $followingsIdArray);
    }
}
