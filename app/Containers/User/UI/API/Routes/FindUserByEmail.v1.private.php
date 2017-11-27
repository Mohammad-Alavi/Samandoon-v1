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
    "msg": "Found user",
        "object": {
        "object": "User",
            "id": "qv4jdwrw0lanm6xg",
            "first_name": "Mohammad",
            "last_name": "Alavi",
            "email": "m.alavi1989@gmail.com",
            "avatar": "avatars/gMmrxFeNWFYfGtzJtSP305pJSrgpnAizNM2XgiEO.jpeg"
        },
        "view_user": {
        "href": "v1/user/qv4jdwrw0lanm6xg",
            "method": "GET"
        }
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
