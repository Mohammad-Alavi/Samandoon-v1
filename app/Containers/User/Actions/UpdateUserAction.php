<?php

namespace App\Containers\User\Actions;

use App\Containers\User\Tasks\UpdateUserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Illuminate\Support\Facades\Hash;

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
            'password'             => $request->password ? Hash::make($request->password) : null,
            'name'                 => $request->name,
            'email'                => $request->email,
            'gender'               => $request->gender,
            'birth'                => $request->birth,
            'device'               => $request->device,
            'platform'             => $request->platform,
            'social_token'         => $request->token,
            'social_expires_in'    => $request->expiresIn,
            'social_refresh_token' => $request->refreshToken,
            'social_token_secret'  => $request->tokenSecret,
        ];

        // remove null values and their keys
        $userData = array_filter($userData);

        return $this->call(UpdateUserTask::class, [$userData, $request->id]);
    }
}
