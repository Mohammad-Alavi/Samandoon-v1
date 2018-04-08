<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetNgoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$request->id]);
        return $ngo;
    }
}
