<?php

/**
 * @apiGroup           User
 * @apiName            followFeed
 *
 * @api                {POST} /v1/user/feed/follow Follow Feed
 * @apiDescription     Follow the specified feed
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String} id
 * @apiParam           {String="user,ngo,timeline,notification,timeline_aggregated"} feed
 * @apiParam           {String} target_id
 * @apiParam           {String="user,ngo,timeline,notification,timeline_aggregated"} target_feed
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
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
