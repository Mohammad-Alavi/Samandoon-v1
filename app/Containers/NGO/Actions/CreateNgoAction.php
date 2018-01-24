<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateNgoAction extends Action
{
    public function run(Request $request): Ngo
    {
        $authenticated_user = $this->call('Authentication@GetAuthenticatedUserTask');
        $ngo_data = $this->call('NGO@FindNgoByNationalIdTask',[$request->national_id]);
        return $this->call('NGO@CreateNgoTask', [$ngo_data, $authenticated_user]);
    }
}
