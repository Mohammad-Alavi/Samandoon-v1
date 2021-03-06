<?php

namespace App\Containers\User\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;

class GetSubscriptionsTask extends Task
{
    public function run(User $user, $limit)
    {
        return $user->subscriptions(Ngo::class)->latest()->paginate($limit ? $limit : 10);
    }
}
