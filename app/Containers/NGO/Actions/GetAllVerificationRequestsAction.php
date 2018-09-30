<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetAllVerificationRequestsAction extends Action
{
    public function run(DataTransporter $request)
    {
        return Apiato::call('NGO@GetAllVerificationRequestsTask', [], [
            ['orderBy' => [$request->orderBy, $request->sortedBy]],
        ]);
//        $ngo = Apiato::call('NGO@GetAllVerificationRequestsTask', []);
//        return $ngo;
    }
}
