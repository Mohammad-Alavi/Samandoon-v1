<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetNgoAction extends Action
{
    public function run(Request $request): Ngo
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$request->id]);

        throw_if(empty($ngo->id), new NotFoundException('NGO not found.'));

        return $ngo;
    }
}
