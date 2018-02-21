<?php

/**
 * @apiGroup           User
 * @apiName            toggleLike
 *
 * @api                {POST} /v1/user/togglelike Toggle Like
 * @apiDescription     Toggle Like on the specified resource
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
$router->post('user/togglelike', [
    'as' => 'api_user_toggle_like',
    'uses'  => 'Controller@toggleLike',
    'middleware' => [
      'auth:api',
    ],
]);
