<?php

/**
 * @apiGroup           User
 * @apiName            getSubscriptions
 *
 * @api                {GET} /v1/user/subscriptions/all Get Subscriptions
 * @apiDescription     Get all user subscriptions
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
 */

/** @var Route $router */
$router->get('user/subscriptions/all', [
    'as' => 'api_user_get_subscriptions',
    'uses'  => 'Controller@getSubscriptions',
    'middleware' => [
      'auth:api',
    ],
]);
