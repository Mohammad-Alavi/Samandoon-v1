<?php

/**
 * @apiGroup           User
 * @apiName            unsubscribe
 *
 * @api                {POST} /v1/user/unsubscribe/{id} Unsubscribe
 * @apiDescription     Unsubscribe from the specified resource
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
$router->post('user/unsubscribe/{id}', [
    'as' => 'api_user_unsubscribe',
    'uses'  => 'Controller@unsubscribe',
    'middleware' => [
      'auth:api',
    ],
]);
