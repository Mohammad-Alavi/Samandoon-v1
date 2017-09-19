<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Exceptions\DontHaveAccessToNgoException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Auth;

class CheckHasAccessToNgoTask extends Task
{
    public function run($ngo)
    {
        // check if user is admin or the owner of the requested ngo
        $authed_user = Auth::user();
        try {
            if (!$authed_user->is_client || $authed_user->ngo->id == $ngo->id) {
                return true;
            }
        }
        catch(Exception $e) {
            throw new DontHaveAccessToNgoException;
        }
    }
}
