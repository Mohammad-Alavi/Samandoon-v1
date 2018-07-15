<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateNgoAction extends Action
{
    public function run(Request $request): Ngo
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$request->id]);
        Apiato::call('NGO@CheckHasAccessToNgoTask', [$ngo]);

        $data = $request->sanitizeInput([
            'description',
            'public_name',
            'area_of_activity',
            'subject',
            'city',
            'province',
            'address',
            'zip_code',
            'ngo_logo',
            'ngo_banner',
            'phone'
        ]);

        return Apiato::call('NGO@UpdateNgoTask', [$ngo, $data]);
    }
}