<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Tasks\FindNgoByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetNgoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = $this->call(FindNgoByIdTask::class, [$request->id]);

        return $ngo;
    }
}
