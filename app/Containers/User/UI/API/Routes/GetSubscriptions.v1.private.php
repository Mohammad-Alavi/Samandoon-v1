<?php

/**
 * @apiGroup           User
 * @apiName            getSubscriptions
 *
 * @api                {GET} /v1/user/{user_id}/subscriptions Get Subscriptions of User
 * @apiDescription     Get all subscriptions of a specific user
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
 */

/** @var Route $router */
$router->get('user/{id}/subscriptions', [
    'as' => 'api_user_get_subscriptions',
    'uses'  => 'Controller@getSubscriptions',
//    'middleware' => [
//      'auth:api',
//    ],
]);
