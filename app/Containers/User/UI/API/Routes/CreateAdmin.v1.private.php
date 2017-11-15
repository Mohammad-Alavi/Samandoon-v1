<?php

/**
 * @apiGroup           User
 * @apiName            CreateAdmin
 * @api                {post} /v1/admin Create Admin type Users
 * @apiDescription     Creating non client Users, form the Dashboard.
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  email
 * @apiParam           {String}  password
 * @apiParam           {String}  first_name
 * @apiParam           {String}  last_name
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->post('admin', [
    'as' => 'api_user_create_admin',
    'uses'  => 'Controller@createAdmin',
    'middleware' => [
        'auth:api',
    ],
]);
