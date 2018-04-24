<?php

/**
 * @apiGroup           User
 * @apiName            follow
 *
 * @api                {POST} /v1/user/feed/follow Follow
 * @apiDescription     Follow the specified NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String} id user id
 * @apiParam           {String="user"} feed
 * @apiParam           {String} target_id target entity id
 * @apiParam           {String="ngo"} target_feed
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "followers_count": 1, // given ngo followers count
    "is_following": true // returns true if user is following the given ngo and false otherwise
}
 */

/** @var Route $router */
$router->post('user/feed/follow', [
    'as' => 'api_user_follow_feed',
    'uses'  => 'Controller@followFeed',
    'middleware' => [
      'auth:api',
    ],
]);
