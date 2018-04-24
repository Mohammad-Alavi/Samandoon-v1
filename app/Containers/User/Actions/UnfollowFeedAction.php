<?php

namespace App\Containers\User\Actions;

use App\Ship\Exceptions\ValidationFailedException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Transporters\DataTransporter;
use Vinkla\Hashids\Facades\Hashids;

class UnfollowFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $user = Apiato::call('User@FindUserByIdTask', [Hashids::decode($dataTransporter->id)[0]]);
        $targetNgo = Apiato::call('NGO@FindNgoByIdTask', [Hashids::decode($dataTransporter->target_id)[0]]);

        // Check if the following and follower ID's are the same and throw an exception
        $AuthenticatedUser = Apiato::call('Authentication@GetAuthenticatedUserTask');
        try {
            throw_if($AuthenticatedUser->getHashedKey() == $targetNgo->user->getHashedKey(), ValidationFailedException::class, 'Both Following user id and Follower id\'s are the same. User cannot follow her own ngo!');
            Apiato::call('User@UnfollowFeedTask', [$dataTransporter]);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

        // add follow data to local server as well
        Apiato::call('User@UnsubscribeTask', [$user, $targetNgo]);
        $unfollowData = [
            'followers_count' => $targetNgo->subscribers()->get()->count(),
            'is_following' => $targetNgo->isSubscribedBy($user)
        ];
        return $unfollowData;
    }
}
