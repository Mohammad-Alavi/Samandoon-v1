<?php

namespace App\Containers\User\Tasks;

use Apiato\Core\Abstracts\Requests\Request;
use App\Containers\Authorization\Tasks\GetRoleTask;
use App\Containers\Socialauth\Exceptions\AccountFailedException;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
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
//    public function run(Request $request, $isClient = true)
//    {

    /**
     * @param bool $isClient
     * @param string $email
     * @param string $password
     * @param string|null $first_name
     * @param string|null $last_name
     * @param string|null $gender
     * @param string|null $birth
     * @return User|mixed
     * @internal param null|string $name
     */
    public function run(
        bool $isClient = true,
        string $email,
        string $password,
        string $first_name = null,
        string $last_name = null,
        string $gender = null,
        string $birth = null
    ): User {

        try {
            // create new user
            $user = App::make(UserRepository::class)->create([
                'is_client' => $isClient,
                'email' => $email,
                'password' => Hash::make($password),
                'first_name' => $first_name,
                'last_name' => $last_name,
                'gender' => $gender,
                'birth' => $birth,
                'avatar'    =>  config('samandoon.default.avatar'),
            ]);

            // assign 'user' role to registered user
            if ($isClient) {
                $user->assignRole('user');
            }
        } catch (Exception $e) {
            throw (new CreateResourceFailedException())->debug($e);
        }

        return $user;
    }
}
