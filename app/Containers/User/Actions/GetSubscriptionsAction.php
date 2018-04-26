<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetSubscriptionsAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $AuthenticatedUser = Apiato::call('Authentication@GetAuthenticatedUserTask');
        $subscriptions = Apiato::call('User@GetSubscriptionsTask', [$AuthenticatedUser, $dataTransporter->limit]);
        return $subscriptions;
    }
}
