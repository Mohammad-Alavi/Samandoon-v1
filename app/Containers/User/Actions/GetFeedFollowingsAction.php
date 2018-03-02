<?php

namespace App\Containers\User\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Requests\Request;

class GetFeedFollowingsAction extends Action
{
    public function run(Request $request)
    {
        try {
            $user = Apiato::call('User@FindUserByIdTask', [$request->id]);
            throw_if(empty($user->id), NotFoundException::class, 'User not found');
            // get data from GetStream servers
//            return Apiato::call('User@GetFeedFollowingsTask', [$request->limit, $user]);
            // get data from local server
            return Apiato::call('User@GetSubscriptionsTask', [$user, $request->limit]);

        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}
