<?php

namespace App\Containers\User\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Article\UI\API\Transformers\ArticleTransformer;
use App\Containers\NGO\UI\API\Transformers\NgoTransformer;
use App\Containers\User\UI\API\Requests\CreateAdminRequest;
use App\Containers\User\UI\API\Requests\DeleteUserRequest;
use App\Containers\User\UI\API\Requests\FindUserByEmailRequest;
use App\Containers\User\UI\API\Requests\FollowFeedRequest;
use App\Containers\User\UI\API\Requests\GetFeedFollowersRequest;
use App\Containers\User\UI\API\Requests\GetFeedFollowingsRequest;
use App\Containers\User\UI\API\Requests\GetLikesRequest;
use App\Containers\User\UI\API\Requests\GetSubscriptionsRequest;
use App\Containers\User\UI\API\Requests\GetUserFeedRequest;
use App\Containers\User\UI\API\Requests\LikeRequest;
use App\Containers\User\UI\API\Requests\GetAuthenticatedUserRequest;
use App\Containers\User\UI\API\Requests\FindUserByIdRequest;
use App\Containers\User\UI\API\Requests\ForgotPasswordRequest;
use App\Containers\User\UI\API\Requests\GetAllUsersRequest;
use App\Containers\User\UI\API\Requests\RegisterUserRequest;
use App\Containers\User\UI\API\Requests\ResetPasswordRequest;
use App\Containers\User\UI\API\Requests\SubscribeRequest;
use App\Containers\User\UI\API\Requests\ToggleLikeRequest;
use App\Containers\User\UI\API\Requests\ToggleSubscribeRequest;
use App\Containers\User\UI\API\Requests\UnfollowFeedRequest;
use App\Containers\User\UI\API\Requests\UnlikeRequest;
use App\Containers\User\UI\API\Requests\UnsubscribeRequest;
use App\Containers\User\UI\API\Requests\UpdateUserRequest;
use App\Containers\User\UI\API\Transformers\ActivityFeedTransformer;
use App\Containers\User\UI\API\Transformers\LikeTransformer;
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

    public function resetPassword(ResetPasswordRequest $request)
    {
        Apiato::call('User@ResetPasswordAction', [new DataTransporter($request)]);

        return $this->noContent(204);
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        Apiato::call('User@ForgotPasswordAction', [new DataTransporter($request)]);

        return $this->noContent(202);
    }

    public function findUserByEmail(FindUserByEmailRequest $request)
    {
        $user = Apiato::call('User@FindUserByEmailAction', [$request]);
        $user->msg = 'User Found';
        return $this->transform($user, UserByEmailTransformer::class);
    }

    public function like(LikeRequest $request)
    {
        $likePayload = Apiato::call('User@LikeAction', [new DataTransporter($request)]);
        $likeTransformer = new LikeTransformer();
        return $likeTransformer->transform($likePayload);
    }

    public function unlike(UnlikeRequest $request)
    {
        $likePayload = Apiato::call('User@UnlikeAction', [new DataTransporter($request)]);
        $likeTransformer = new LikeTransformer();
        return $likeTransformer->transform($likePayload);
    }

    public function toggleLike(ToggleLikeRequest $request)
    {
        $likePayload = Apiato::call('User@ToggleLikeAction', [new DataTransporter($request)]);
        $likeTransformer = new LikeTransformer();
        return $likeTransformer->transform($likePayload);
    }

    public function getLikes(GetLikesRequest $request)
    {
        $users = Apiato::call('User@GetLikesAction', [new DataTransporter($request)]);
        return $this->transform($users, UserTransformer::class);
    }

    public function followFeed(FollowFeedRequest $request)
    {
        return Apiato::call('User@FollowFeedAction', [new DataTransporter($request)]);
    }

    public function unfollowFeed(UnfollowFeedRequest $request)
    {
        return Apiato::call('User@UnfollowFeedAction', [new DataTransporter($request)]);
    }

    public function getFeedFollowers(GetFeedFollowersRequest $request)
    {
        $followers = Apiato::call('User@GetFeedFollowersAction', [$request]);
        return $this->transform($followers, UserTransformer::class);
    }

    public function getFeedFollowings(GetFeedFollowingsRequest $request)
    {
        $followings = Apiato::call('User@GetFeedFollowingsAction', [$request]);
        return $this->transform($followings, NgoTransformer::class);
    }

    public function getUserFeed(GetUserFeedRequest $request)
    {
        $activities = Apiato::call('User@GetUserFeedAction', [new DataTransporter($request)]);
        $activityTransformer = new ActivityFeedTransformer();
        $transformedActivities = $activityTransformer->transformer($activities);
        $articles = Apiato::call('User@GetArticlesFromFeedAction', [$transformedActivities]);
        return $this->transform($articles, ArticleTransformer::class);
    }

    public function subscribe(SubscribeRequest $request)
    {
        return Apiato::call('User@SubscribeAction', [new DataTransporter($request)]);
    }

    public function unsubscribe(UnsubscribeRequest $request)
    {
        return Apiato::call('User@UnsubscribeAction', [new DataTransporter($request)]);
    }

    public function toggleSubscribe(ToggleSubscribeRequest $request)
    {
        return Apiato::call('User@ToggleSubscribeAction', [new DataTransporter($request)]);
    }

    public function getSubscriptions(GetSubscriptionsRequest $request)
    {
        $users = Apiato::call('User@GetSubscriptionsAction', [new DataTransporter($request)]);
        return $this->transform($users, NgoTransformer::class);
    }
}