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
        $authenticated_user = $this->call('Authentication@GetAuthenticatedUserTask');
        $ngo_data = $this->call('NGO@FindNgoByNationalIdTask',[$request->national_id]);
        $ngo = $this->call('NGO@CreateNgoTask', [$ngo_data, $authenticated_user]);

        return $ngo;
    }
}
