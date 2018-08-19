<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetNgoByPublicNameAction extends Action
{
    public function run(DataTransporter $request)
    {
        $ngo = Apiato::call('NGO@GetNgoByPublicNameTask', [$request->public_name]);
        return $ngo;
    }
}
