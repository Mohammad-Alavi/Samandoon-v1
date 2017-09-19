<?php

/**
 * @apiGroup           User
 * @apiName            getUser
 * @api                {get} /v1/user/{id} Get User
 * @apiDescription     Find a user by its ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->get('user/{id}', [
    'uses'       => 'Controller@getUser',
    'middleware' => [
        'auth:api',
    ],
]);
