<?php

/**
 * @apiGroup           User
 * @apiName            subscribe
 *
 * @api                {POST} /v1/user/subscribe/{id} Subscribe
 * @apiDescription     Subscribe to the specified resource
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {string="ngo"} resource_name
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
"User (3mjzyg5dp5a0vwp6) is now subscribed to resource (kjeonp5eordqzvb8)."
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
