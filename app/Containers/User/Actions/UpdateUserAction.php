<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Ship\Transporters\DataTransporter;

/**
 * Class UpdateUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserAction extends Action
{
    /**
     * @param Request|DataTransporter $data
     * @return User
     */
    public function run(Request $data): User
    {
        $sanitizedData = $data->sanitizeInput([
            'first_name',
            'last_name',
            'password',
            'avatar',
            'gender',
            'birth',
            'social_token',
            'social_expires_in',
            'social_refresh_token',
            'social_token_secret',
            'social_token',
            'social_expires_in',
            'social_refresh_token',
            'social_token_secret',
        ]);

        $user = Apiato::call('User@UpdateUserTask', [$sanitizedData, $data->id]);
        return $user;
    }
}