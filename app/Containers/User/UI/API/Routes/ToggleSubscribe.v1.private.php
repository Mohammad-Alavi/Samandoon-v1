<?php

/**
 * @apiGroup           User
 * @apiName            toggleSubscribe
 *
 * @api                {POST} /v1/user/togglesubscribe/{id} Toggle Subscription
 * @apiDescription     Toggle Subscription to the specified resource
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {string="ngo"} resource_name
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "User (3mjzyg5dp5a0vwp6) unsubscribed from resource (kjeonp5eordqzvb8)."
}
 */

/** @var Route $router */
$router->post('user/togglesubscribe/{id}', [
    'as' => 'api_user_toggle_subscribe',
    'uses'  => 'Controller@toggleSubscribe',
    'middleware' => [
      'auth:api',
    ],
]);
