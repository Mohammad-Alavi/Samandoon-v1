<?php

namespace App\Containers\User\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\UI\API\Requests\CreateAdminRequest;
use App\Containers\User\UI\API\Requests\DeleteUserRequest;
use App\Containers\User\UI\API\Requests\FallowNgoRequest;
use App\Containers\User\UI\API\Requests\FindUserByEmailRequest;
use App\Containers\User\UI\API\Requests\GetAuthenticatedUserRequest;
use App\Containers\User\UI\API\Requests\FindUserByIdRequest;
use App\Containers\User\UI\API\Requests\GetAllUsersRequest;
use App\Containers\User\UI\API\Requests\RegisterUserRequest;
use App\Containers\User\UI\API\Requests\UpdateUserRequest;
use App\Containers\User\UI\API\Transformers\CreateUserTransformer;
use App\Containers\User\UI\API\Transformers\UpdateUserTransformer;
use App\Containers\User\UI\API\Transformers\UserByEmailTransformer;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class Controller extends ApiController
{
    public function registerUser(RegisterUserRequest $request)
    {
        $user = Apiato::call('User@RegisterUserAction', [$request]);
        $user->msg = 'User created';
        return $this->transform($user, UserTransformer::class);
    }

    public function createAdmin(CreateAdminRequest $request)
    {
        $admin = Apiato::call('User@CreateAdminAction', [$request]);
        $admin->msg = 'Admin created';
        return $this->transform($admin, UserTransformer::class);
    }

    public function updateUser(UpdateUserRequest $request)
    {
        $user = Apiato::call('User@UpdateUserAction', [$request]);
        $user->msg = 'User updated';
        return $this->transform($user, UserTransformer::class);
    }

    public function deleteUser(DeleteUserRequest $request)
    {
        $user = Apiato::call('User@DeleteUserAction', [$request]);

        return $this->deleted($user);
    }

    public function getAllUsers(GetAllUsersRequest $request)
    {
        $users = Apiato::call('User@GetAllUsersAction');
        return $this->transform($users, UserTransformer::class);
    }

    public function getAllClients(GetAllUsersRequest $request)
    {
        $users = Apiato::call('User@GetAllClientsAction');
        return $this->transform($users, UserTransformer::class);
    }

    public function getAllAdmins(GetAllUsersRequest $request)
    {
        $users = Apiato::call('User@GetAllAdminsAction');
        return $this->transform($users, UserTransformer::class);
    }

    public function findUserById(FindUserByIdRequest $request)
    {
        $user = Apiato::call('User@FindUserByIdAction', [$request]);
        $user->msg = 'Found User';
        return $this->transform($user, UserTransformer::class);
    }

    public function getAuthenticatedUser(GetAuthenticatedUserRequest $request)
    {
        $user = Apiato::call('User@GetAuthenticatedUserAction', [$request]);
        $user->msg = 'Found User';
        return $this->transform($user, UserTransformer::class, ['roles']);
    }

    public function findUserByEmail(FindUserByEmailRequest $request)
    {
        $user = Apiato::call('User@FindUserByEmailAction', [$request]);
        $user->msg = 'Found User';
        return $this->transform($user, UserByEmailTransformer::class);
    }

    public function fallowNgo(FallowNgoRequest $request){
        //TODO Code
    }

}
