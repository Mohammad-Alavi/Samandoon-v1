<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class GetUserFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $user = Apiato::call('User@FindUserByIdTask', [$dataTransporter->id]);
        return Apiato::call('User@GetUserFeedTask', [$user]);
    }
}
