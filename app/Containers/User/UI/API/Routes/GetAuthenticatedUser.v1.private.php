<?php

/**
 * @apiGroup           User
 * @apiName            GetAuthenticatedUser
 * @api                {GET} /v1/profile Get Logged in user Profile
 * @apiDescription     Find the user details of the logged in user from its Token. (without specifying his ID)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->get('profile', [
    'as' => 'api_user_get_authenticated_user',
    'uses'  => 'Controller@getAuthenticatedUser',
    'middleware' => [
      'auth:api',
    ],
]);
