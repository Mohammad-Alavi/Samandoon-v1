<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class FollowFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
         return Apiato::call('User@FollowFeedTask', [$dataTransporter]);
    }
}
