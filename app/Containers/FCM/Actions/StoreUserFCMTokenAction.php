<?php

namespace App\Containers\FCM\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Auth;

class StoreUserFCMTokenAction extends Action
{
    public function run(DataTransporter $transporter)
    {
        $data = $transporter;
        $userId = Auth::id();
        $var = Apiato::call('FCM@StoreUserFCMTokenTask', [$data, $userId]);
        return $var;
    }
}
