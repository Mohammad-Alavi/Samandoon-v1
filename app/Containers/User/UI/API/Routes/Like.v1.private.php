<?php

/**
 * @apiGroup           User
 * @apiName            like
 *
 * @api                {POST} /v1/user/like Like
 * @apiDescription     Like the specified target
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String}  id id of the target to be liked
 * @apiParam           {String="article"}  type
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "User (qv4jdwrw0lanm6xg) liked Article (kjeonp5eordqzvb8)."
}
 */

/** @var Route $router */
$router->post('user/like', [
    'as' => 'api_user_like',
    'uses'  => 'Controller@like',
    'middleware' => [
      'auth:api',
    ],
]);
