<?php

namespace App\Containers\NGO\Actions;

use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\NGO\Tasks\CreateNgoTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateNgoAction extends Action
{
    public function run(Request $request)
    {
        $authed_user = $this->call(GetAuthenticatedUserTask::class);
        $ngo = $this->call(CreateNgoTask::class, [$request, $authed_user]);

        return $ngo;
    }
}
