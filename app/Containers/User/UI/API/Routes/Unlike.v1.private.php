<?php

/**
 * @apiGroup           User
 * @apiName            unlike
 *
 * @api                {POST} /v1/user/unlike Unlike
 * @apiDescription     Unlike the specified target
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id id of the target to be unliked
 * @apiParam           {String="article"}  type
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "User (qv4jdwrw0lanm6xg) unliked Article (kjeonp5eordqzvb8)."
}
 */

/** @var Route $router */
$router->post('user/unlike', [
    'as' => 'api_user_unlike',
    'uses'  => 'Controller@unlike',
    'middleware' => [
      'auth:api',
    ],
]);
