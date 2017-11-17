<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;

class FindUserByEmailTask extends Task
{
    public function run($userEmail)
    {
        // find the user by its email
        try {
            $user = User::where('email', $userEmail)->first();
        } catch (Exception $e) {
            throw new NotFoundException();
        }

        return $user;
    }
}
