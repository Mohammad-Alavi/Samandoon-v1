<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Exceptions\ValidationFailedException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class FollowFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        // Check if the following and follower ID's are the same and throw an exception
        $user = Apiato::call('Authentication@GetAuthenticatedUserTask');
        info($user->getHashedKey() . ' | ' . $dataTransporter->id);
        throw_if($user->getHashedKey() == $dataTransporter->id, new ValidationFailedException('Both Following and Follower id\'s are the same. User cannot follow itself!'));
        return Apiato::call('User@FollowFeedTask', [$dataTransporter]);
    }
}
