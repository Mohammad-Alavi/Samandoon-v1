<?php

namespace App\Containers\User\Tasks;

use App\Containers\Authorization\Tasks\GetRoleTask;
use App\Containers\Socialauth\Exceptions\AccountFailedException;
use App\Containers\User\Data\Repositories\UserRepository;
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
     * @param null $first_name
     * @param null $last_name
     * @param $email
     * @param $password
     * @param null $gender
     * @param null $birth
     * @param bool $isClient
     * @param null $province
     * @param null $city
     * @param null $device
     * @param null $platform
     * @return mixed
     * @internal param null $name
     */
    public function run($isClient = true, $email, $password, $first_name = null, $last_name = null,
                        $avatar = null, $gender = null, $birth = null, $province = null, $city = null, $device = null, $platform = null) {
        try {
            // create new user
            $user = App::make(UserRepository::class)->create([
                'first_name'   => $first_name,
                'last_name'     => $last_name,
                'email'    => $email,
                'password' => Hash::make($password),
                'avatar'   => $avatar,
                'gender'   => $gender,
                'birth'    => $birth,
                'province'    => $province,
                'city'    => $city,
                'device'   => $device,
                'platform' => $platform,
                'is_client' => $isClient,
            ]);

            // assign 'user' role to registered user
            if($isClient) {
                $user->assignRole('user');
            }
        } catch (Exception $e) {
            throw (new AccountFailedException())->debug($e);
        }

        return $user;
    }

}
