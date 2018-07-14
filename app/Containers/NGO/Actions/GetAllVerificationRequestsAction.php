<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllVerificationRequestsAction extends Action
{
    public function run()
    {
        $ngo = Apiato::call('NGO@GetAllVerificationRequestsTask', []);
        return $ngo;
    }
}
