<?php

/**
 * @apiGroup           User
 * @apiName            findUserByEmail
 *
 * @api                {GET} /v1/user/email/{email} Find User by Email
 * @apiDescription     Find user by given email
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "first_name": "Mohammad",
        "last_name": "Alavi",
        "avatar": null
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/
$router->get('user/email/{email}', [
    'as' => 'api_user_find_user_by_email',
    'uses'  => 'Controller@findUserByEmail',
]);
