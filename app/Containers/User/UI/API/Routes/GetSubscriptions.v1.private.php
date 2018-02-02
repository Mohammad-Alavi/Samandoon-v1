<?php

/**
 * @apiGroup           User
 * @apiName            getSubscriptions
 *
 * @api                {GET} /v1/user/subscriptions/{user_id} Get Subscriptions of User
 * @apiDescription     Get all subscriptions of a specific user
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
 */

/** @var Route $router */
$router->get('user/subscriptions/{id}', [
    'as' => 'api_user_get_subscriptions',
    'uses'  => 'Controller@getSubscriptions',
    'middleware' => [
      'auth:api',
    ],
]);
