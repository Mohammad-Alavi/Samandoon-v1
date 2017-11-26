<?php

/**
 * @apiGroup           User
 * @apiName            UpdateUser
 * @api                {put} /v1/user/{id} Update User
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User (Admin | Owner)
 *
 * @apiParam           {String}  email (optional)
 * @apiParam           {String}  password (optional)
 * @apiParam           {String}  first_name (optional)
 * @apiParam           {String}  last_name (optional)
 * @apiParam           {image}   avatar (optional)
 * @apiParam           {String}  gender (optional)
 * @apiParam           {String}  birth (optional)
 * @apiParam           {String}  province (optional)
 * @apiParam           {String}  city (optional)
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->put('user/{id}', [
    'as' => 'api_user_update_user',
    'uses'       => 'Controller@updateUser',
    'middleware' => [
        'auth:api',
    ],
]);
