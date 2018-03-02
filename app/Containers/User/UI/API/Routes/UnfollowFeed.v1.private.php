<?php

/**
 * @apiGroup           User
 * @apiName            unfollowFeed
 *
 * @api                {POST} /v1/user/feed/unfollow Unfollow Feed
 * @apiDescription     Unfollow the specified feed
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
