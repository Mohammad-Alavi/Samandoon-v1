<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Exceptions\UserDontHaveNgoException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\Auth;

class GetAuthenticatedUserNgoTask extends Task
{
    public function run()
    {
        $user = Auth::user();

        if (!$user->ngo) {
            throw new UserDontHaveNgoException();
        }

        $ngo = $user->ngo;

        return $ngo;
    }
}
