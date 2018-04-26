<?php

/**
 * @apiGroup           User
 * @apiName            subscribe
 *
 * @api                {POST} /v1/user/subscribe/{id} Subscribe
 * @apiDescription     Subscribe to the given resource
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "followers_count": 1,
    "is_following": true
}
 */

/** @var Route $router */
$router->post('user/subscribe/{id}', [
    'as' => 'api_user_subscribe',
    'uses'  => 'Controller@subscribe',
    'middleware' => [
      'auth:api',
    ],
]);
