<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Hash;
use Vinkla\Hashids\Facades\Hashids;

/**
 * Class UpdateUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserAction extends Action
{

    /**
     * @param \App\Ship\Transporters\DataTransporter $data
     *
     * @return  \App\Containers\User\Models\User
     */
    public function run(DataTransporter $data): User
    {
        $userData = [
            'first_name'           => $data->first_name,
            'last_name'            => $data->last_name,
            'email'                => $data->email,
            'password'             => $data->password ? Hash::make($data->password) : null,
            'avatar'               => $data->hasFile('avatar') ? $data->avatar->storeAs(Hashids::encode($data->id), 'avatar.' . $data->avatar->getClientOriginalExtension(), 'public') : null,
            'gender'               => $data->gender,
            'birth'                => $data->birth,
            'province'             => $data->province,
            'city'                 => $data->city,
            'social_token'         => $data->token,
            'social_expires_in'    => $data->expiresIn,
            'social_refresh_token' => $data->refreshToken,
            'social_token_secret'  => $data->tokenSecret,
            'social_token'         => $data->token,
            'social_expires_in'    => $data->expiresIn,
            'social_refresh_token' => $data->refreshToken,
            'social_token_secret'  => $data->tokenSecret,
        ];

        // remove null values and their keys
        $userData = array_filter($userData);

        $user = Apiato::call('User@UpdateUserTask', [$userData, $data->id]);

        return $user;
    }
}
