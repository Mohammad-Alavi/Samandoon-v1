<?php

/**
 * @apiGroup           User
 * @apiName            getSubscribers
 *
 * @api                {GET} /v1/user/subscribers/get Get Subscribers
 * @apiDescription     Get the User's NGO subscribers
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiUse             UserSuccessSingleResponse
 */

/** @var Route $router */
$router->get('user/subscribers/get', [
    'as' => 'api_user_get_subscribers',
    'uses'  => 'Controller@getSubscribers',
    'middleware' => [
      'auth:api',
    ],
]);
