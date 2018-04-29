<?php

namespace App\Containers\User\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Models\User;
use App\Containers\User\UI\WEB\Requests\ResetPasswordRequest;
use App\Ship\Parents\Controllers\WebController;
use App\Ship\Transporters\DataTransporter;
use Exception;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sayWelcome()
    {
        // user say welcome
        $ngo = User::find(2)->ngo()->first();
        return view('user::user-welcome', ['ngo' => $ngo]);
    }

    public function getResetPassword()
    {
        return view('user::password-reset');
    }

    public function postResetPassword(ResetPasswordRequest $request)
    {
        try {
            $result = Apiato::call('User@ResetPasswordAction', [new DataTransporter($request)]);
            return back()->with('status', $result);

        } catch (Exception $e) {
            return back()->with('status', $e->getMessage());
        }
    }
}
