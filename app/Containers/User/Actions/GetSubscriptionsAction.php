<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;

class GetSubscriptionsAction extends Action
{
    public function run()
    {
        $user = $this->call('Authentication@GetAuthenticatedUserTask');
        return $this->call('User@GetSubscriptionsTask', [$user]);
    }
}
