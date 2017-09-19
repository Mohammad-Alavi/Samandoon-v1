<?php

namespace App\Containers\User\Tasks;

use App\Containers\Authorization\Tasks\GetRoleTask;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Exceptions\AccountFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

/**
 * Class CreateUserByCredentialsTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserByCredentialsTask extends Task
{

    /**
     * @param bool $isClient
     * @param $email
     * @param $password
     * @param null $first_name
     * @param null $last_name
     * @param null $gender
     * @param null $birth
     *
     * @param null $province
     * @param null $city
     * @param null $device
     * @param null $platform
     * @return mixed
     * @internal param null $name
     */
    public function run($isClient = true, $email, $password, $first_name = null, $last_name = null, $gender = null, $birth = null, $province = null, $city = null, $device = null, $platform = null)
    {
        try {
            // create new user
            $user = App::make(UserRepository::class)->create([
                'password' => Hash::make($password),
                'email'    => $email,
                'first_name'   => $first_name,
                'last_name'     => $last_name,
                'gender'   => $gender,
                'birth'    => $birth,
                'province'    => $province,
                'city'    => $city,
                'device'   => $device,
                'platform' => $platform,
                'is_client' => $isClient,
            ]);

            // assign 'user' role to registered user
            $user->assignRole('user');

        } catch (Exception $e) {
            throw (new AccountFailedException())->debug($e);
        }

        return $user;
    }

}
