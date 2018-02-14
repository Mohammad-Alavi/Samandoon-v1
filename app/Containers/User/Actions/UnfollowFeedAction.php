<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class UnfollowFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        return Apiato::call('User@UnfollowFeedTask', [$dataTransporter]);
    }
}
