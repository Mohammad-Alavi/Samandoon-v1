<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class GetUserFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
//        $user = $this->call('User@FindUserByIdTask', [$dataTransporter->id]);
        return $this->call('User@GetUserFeedTask', [$dataTransporter->id]);
    }
}
