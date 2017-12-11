<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Illuminate\Support\Facades\Hash;
use Apiato\Core\Foundation\Facades\Apiato;
use Vinkla\Hashids\Facades\Hashids;

/**
 * Class UpdateUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserAction extends Action
{

    /**
     * @param \App\Ship\Parents\Requests\Request $request
     *
     * @return  mixed
     */
    public function run(Request $request)
    {
        $userData = [
            'first_name'           => $request->first_name,
            'last_name'            => $request->last_name,
            'email'                => $request->email,
            'password'             => $request->password ? Hash::make($request->password) : null,
            'avatar'               => $request->hasFile('avatar') ? $request->avatar->storeAs(Hashids::encode($request->id), 'avatar.' . $request->avatar->getClientOriginalExtension(), 'public') : null,
            'gender'               => $request->gender,
            'birth'                => $request->birth,
            'province'             => $request->province,
            'city'                 => $request->city,
            'social_token'         => $request->token,
            'social_expires_in'    => $request->expiresIn,
            'social_refresh_token' => $request->refreshToken,
            'social_token_secret'  => $request->tokenSecret,
        ];

        // remove null values and their keys
        $userData = array_filter($userData);

        return Apiato::call('User@UpdateUserTask', [$userData, $request->id]);
    }
}
