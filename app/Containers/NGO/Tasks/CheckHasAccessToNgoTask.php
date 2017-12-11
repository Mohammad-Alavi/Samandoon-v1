<?php

namespace App\Containers\NGO\Tasks;

use App\Ship\Exceptions\NotAuthorizedResourceException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\Auth;

class CheckHasAccessToNgoTask extends Task
{
    public function run($ngo)
    {
        // check if user is admin or the owner of the requested ngo
        $authed_user = Auth::user();
        if (!$authed_user->is_client || $authed_user->ngo->id == $ngo->id) {
            return true;
        } else {
            throw new NotAuthorizedResourceException('You don\'t have access to manage this NGO.');
        }
    }
}
