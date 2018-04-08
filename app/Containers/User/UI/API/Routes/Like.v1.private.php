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
    "msg": "User (3mjzyg5dp5a0vwp6) liked Article (kjeonp5eordqzvb8).",
    "like_count": 1, //this is the current like count of the liked target e.g. Article
    "is_liked": true
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
