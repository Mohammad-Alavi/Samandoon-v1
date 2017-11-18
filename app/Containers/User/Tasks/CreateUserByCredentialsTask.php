<?php

namespace App\Containers\User\Tasks;

use Apiato\Core\Abstracts\Requests\Request;
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
    public function run(Request $request, $isClient = true)
    {
        try {
            // create new user
            $user = App::make(UserRepository::class)->create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'avatar' => $request->hasFile('avatar') ? $avatar = $request->file('avatar')->store('avatar') : $avatar = null,
                'gender' => $request->gender,
                'birth' => $request->birth,
                'province' => $request->province,
                'city' => $request->city,
                'device' => $request->device,
                'platform' => $request->platform,
                'is_client' => $isClient,
            ]);

            // assign 'user' role to registered user
            if ($isClient) {
                $user->assignRole('user');
            }
        } catch (Exception $e) {
            throw (new AccountFailedException())->debug($e);
        }

        return $user;
    }
}
