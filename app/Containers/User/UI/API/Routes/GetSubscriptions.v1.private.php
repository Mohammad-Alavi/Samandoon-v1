<?php

/**
 * @apiGroup           User
 * @apiName            getSubscriptions
 *
 * @api                {GET} /v1/user/subscriptions/get Get Subscriptions
 * @apiDescription     Get user subscriptions
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiUse             NGOSuccessSingleResponse
 */

/** @var Route $router */
$router->get('user/subscriptions/get', [
    'as' => 'api_user_get_subscriptions',
    'uses'  => 'Controller@getSubscriptions',
    'middleware' => [
      'auth:api',
    ],
]);
