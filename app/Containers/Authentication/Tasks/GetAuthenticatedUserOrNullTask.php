<?php

namespace App\Containers\Authentication\Tasks;

use App\Ship\Parents\Tasks\Task;

class GetAuthenticatedUserOrNullTask extends Task
{
    public function run()
    {
        $user = auth('api')->user();
        return empty($user) ? null : $user;
    }
}
