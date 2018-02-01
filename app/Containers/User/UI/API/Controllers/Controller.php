<?php

namespace App\Containers\User\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\User\UI\API\Requests\CreateAdminRequest;
use App\Containers\User\UI\API\Requests\DeleteUserRequest;
use App\Containers\User\UI\API\Requests\FallowNgoRequest;
use App\Containers\User\UI\API\Requests\FindUserByEmailRequest;
use App\Containers\User\UI\API\Requests\GetSubscriptionsRequest;
use App\Containers\User\UI\API\Requests\HasSubscribedRequest;
use App\Containers\User\UI\API\Requests\SubscribeRequest;
use App\Containers\User\UI\API\Requests\GetAuthenticatedUserRequest;
use App\Containers\User\UI\API\Requests\FindUserByIdRequest;
use App\Containers\User\UI\API\Requests\ForgotPasswordRequest;
use App\Containers\User\UI\API\Requests\GetAllUsersRequest;
use App\Containers\User\UI\API\Requests\RegisterUserRequest;
use App\Containers\User\UI\API\Requests\ResetPasswordRequest;
use App\Containers\User\UI\API\Requests\ToggleSubscribeRequest;
use App\Containers\User\UI\API\Requests\UnsubscribeRequest;
use App\Containers\User\UI\API\Requests\UpdateUserRequest;
use App\Containers\User\UI\API\Transformers\UserByEmailTransformer;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Transporters\DataTransporter;

/**
 * Class Controller.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class Controller extends ApiController
{
    public function registerUser(RegisterUserRequest $request)
    {
        $user = Apiato::call('User@RegisterUserAction', [new DataTransporter($request)]);
        $user->msg = 'User created';
        return $this->transform($user, UserTransformer::class);
    }

    public function createAdmin(CreateAdminRequest $request)
    {
        $admin = Apiato::call('User@CreateAdminAction', [new DataTransporter($request)]);
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
        Apiato::call('User@DeleteUserAction', [new DataTransporter($request)]);

        return $this->noContent();
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
        $user = Apiato::call('User@FindUserByIdAction', [new DataTransporter($request)]);
        $user->msg = 'Found User';
        return $this->transform($user, UserTransformer::class);
    }

    public function getAuthenticatedUser(GetAuthenticatedUserRequest $request)
    {
        $user = Apiato::call('User@GetAuthenticatedUserAction');
        $user->msg = 'Found User';
        return $this->transform($user, UserTransformer::class);
//        return $this->transform($user, UserTransformer::class, ['roles']);
//        return $this->transform($user, UserPrivateProfileTransformer::class);
    }

    /**
     * @param \App\Containers\User\UI\API\Requests\ResetPasswordRequest $request
     *
     * @return  \Illuminate\Http\JsonResponse
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        Apiato::call('User@ResetPasswordAction', [new DataTransporter($request)]);

        return $this->noContent(204);
    }

    /**
     * @param \App\Containers\User\UI\API\Requests\ForgotPasswordRequest $request
     *
     * @return  \Illuminate\Http\JsonResponse
     */
    public function forgotPassword(ForgotPasswordRequest $request)
    {
        Apiato::call('User@ForgotPasswordAction', [new DataTransporter($request)]);

        return $this->noContent(202);
    }

    public function findUserByEmail(FindUserByEmailRequest $request)
    {
        $user = $this->call('User@FindUserByEmailAction', [$request]);
        $user->msg = 'User Found';
        return $this->transform($user, UserByEmailTransformer::class);
    }

    public function subscribe(SubscribeRequest $request)
    {
        return $this->call('User@SubscribeAction', [new DataTransporter($request)]);
    }

    public function unsubscribe(UnsubscribeRequest $request)
    {
        return $this->call('User@UnsubscribeAction', [new DataTransporter($request)]);
    }

    public function toggleSubscribe(ToggleSubscribeRequest $request)
    {
        return $this->call('User@ToggleSubscribeAction', [new DataTransporter($request)]);
    }

    public function getSubscriptions(GetSubscriptionsRequest $request)
    {
        $users = $this->call('User@GetSubscriptionsAction');
        return $this->transform($users, NgoTransformer::class);
    }
}