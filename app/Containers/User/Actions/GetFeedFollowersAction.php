<?php

namespace App\Containers\User\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class GetFeedFollowersAction extends Action
{
    public function run(Request $request)
    {
        $user = Apiato::call('User@FindUserByIdTask', [$request->id]);
        throw_if(empty($user->id), new NotFoundException('User not found.'));
        throw_if(empty($user->ngo->id), new NotFoundException('User don\'t have a NGO.'));

        return Apiato::call('User@GetFeedFollowersTask', [$request, $user]);
    }
}
