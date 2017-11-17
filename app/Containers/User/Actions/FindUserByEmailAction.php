<?php

namespace App\Containers\User\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class FindUserByEmailAction extends Action
{
    public function run(Request $request)
    {
        $user = Apiato::call('User@FindUserByEmailTask', [$request->email]);

        if (!$user) {
            throw new NotFoundException();
        }

        return $user;
    }
}
