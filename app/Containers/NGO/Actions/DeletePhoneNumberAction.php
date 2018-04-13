<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Models\Phone;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeletePhoneNumberAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('Authentication@GetAuthenticatedUserTask')->ngo;
        $phone = Phone::find($request->id);
        abort_if(empty($phone),404, 'Phone number not found');
        abort_if(($phone->ngo_id !== $ngo->id), 401, 'You don\'t have access to this resource');
        return Apiato::call('NGO@DeletePhoneNumberTask', [$request->id]);
    }
}
