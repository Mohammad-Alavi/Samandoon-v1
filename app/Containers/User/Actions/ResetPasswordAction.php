<?php

namespace App\Containers\User\Actions;

use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

/**
 * Class ResetPasswordAction
 *
 * * @author  Sebastian Weckend
 */
class ResetPasswordAction extends Action
{
    public function run(DataTransporter $data)
    {
        $data = [
            'email'                 => $data->email,
            'token'                 => $data->token,
            'password'              => $data->password,
            'password_confirmation' => $data->password,
        ];

        try {
            return Password::broker()->reset(
                $data,
                function ($user, $password){
                    $user->forceFill([
                        'password'       => Hash::make($password),
                        'remember_token' => Str::random(60),
                    ])->save();
                }
            );
        } catch (Exception $e) {
            throw new InternalErrorException();
        }
    }
}
