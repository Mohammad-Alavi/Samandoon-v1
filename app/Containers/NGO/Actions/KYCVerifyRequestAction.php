<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Auth;

class KYCVerifyRequestAction extends Action
{
    public function run()
    {
        throw_unless(Auth::user()->ngo->id, CreateResourceFailedException::class, 'User don\'t have a NGO');
        $ngo = Auth::user()->ngo;

        Apiato::call('NGO@CheckHasAccessToNgoTask', [$ngo]);

        $result = Apiato::call('NGO@KYCVerifyRequestTask', [$ngo]);
        return $result;
    }
}
