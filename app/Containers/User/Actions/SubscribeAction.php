<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class SubscribeAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $AuthenticatedUser = Apiato::call('Authentication@GetAuthenticatedUserTask');
        $result = Apiato::call('User@SubscribeTask', [$AuthenticatedUser, $dataTransporter->id]);
        return $result;
    }
}
