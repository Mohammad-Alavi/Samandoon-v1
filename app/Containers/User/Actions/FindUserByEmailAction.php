<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindUserByEmailAction extends Action
{
    public function run(Request $request)
    {
        return $this->call('User@FindUserByEmailTask', [$request->email]);
    }
}
