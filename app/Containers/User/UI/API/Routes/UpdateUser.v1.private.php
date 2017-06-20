<?php

/**
 * @apiGroup           Users
 * @apiName            UpdateUser
 * @api                {put} /v1/users/:id Update User
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  email (optional)
 * @apiParam           {String}  password (optional)
 * @apiParam           {String}  name (optional)
 * @apiParam           {String}  gender (optional)
 * @apiParam           {String}  birth (optional)
 * @apiParam           {String}  device (optional)
 * @apiParam           {String}  platform (optional) in:android,ios,web,desktop
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->put('users/{id}', [
    'uses'       => 'Controller@updateUser',
    'middleware' => [
        'auth:api',
    ],
]);
