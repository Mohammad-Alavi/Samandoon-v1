<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class FollowFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
         return $this->call('User@FollowFeedTask', [$dataTransporter]);
    }
}
