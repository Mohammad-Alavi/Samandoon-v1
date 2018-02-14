<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetNgoAction extends Action
{
    public function run(Request $request): Ngo
    {
        $ngo = $this->call('NGO@FindNgoByIdTask', [$request->id]);

        throw_if(empty($ngo->id), new NotFoundException('NGO not found.'));

        return $ngo;
    }
}
