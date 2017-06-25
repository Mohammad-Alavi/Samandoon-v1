<?php

namespace App\Containers\User\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

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
    {   // user say welcome
//        $ngo = \App\Containers\NGO\Models\NGO::find(1);
//        return view('user::user-welcome', ['ngo' => $ngo]);
        $ngos = \App\Containers\User\Models\User::find(3)->ngos;
        return view('user::user-welcome', ['ngos' => $ngos]);
    }
}
