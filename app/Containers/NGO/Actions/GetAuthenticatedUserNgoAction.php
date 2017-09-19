<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Tasks\GetAuthenticatedUserNgoTask;
use App\Ship\Parents\Actions\Action;

class GetAuthenticatedUserNgoAction extends Action
{
    public function run()
    {
        $ngo = $this->call(GetAuthenticatedUserNgoTask::class);

        return $ngo;
    }
}
