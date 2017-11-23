<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteNgoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$request->id]);

        // check if has access to manage and delete ngo then deletes the ngo
        if(Apiato::call('NGO@CheckHasAccessToNgoTask', [$ngo])){
            Apiato::call('NGO@DeleteNgoTask', [$ngo]);
        }

        return $ngo;
    }
}
