<?php

/**
 * @apiGroup           User
 * @apiName            unfollow
 *
 * @api                {POST} /v1/user/feed/unfollow Unfollow
 * @apiDescription     Unfollow the specified NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String} id
 * @apiParam           {String="user"} feed
 * @apiParam           {String} target_id
 * @apiParam           {String="ngo"} target_feed
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "followers_count": 1, // given ngo followers count
    "is_following": false // returns true if user is following the given ngo and false otherwise
}
 */

/** @var Route $router */
$router->post('user/feed/unfollow', [
    'as' => 'api_user_unfollow_feed',
    'uses'  => 'Controller@unfollowFeed',
    'middleware' => [
      'auth:api',
    ],
]);
