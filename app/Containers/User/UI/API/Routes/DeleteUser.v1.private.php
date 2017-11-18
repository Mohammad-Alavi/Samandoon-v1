<?php

/**
 * @apiGroup           User
 * @apiName            DeleteUser
 * @api                {delete} /v1/user/{id} Delete User (admin, client..)
 * @apiDescription     Delete Users of any type (Admin, Client,...)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
{
    "message": "User (z5ds4as5d4zxc) Deleted Successfully."
}
 */

$router->delete('user/{id}', [
    'as' => 'api_user_delete_user',
    'uses'       => 'Controller@deleteUser',
    'middleware' => [
        'auth:api',
    ],
]);
