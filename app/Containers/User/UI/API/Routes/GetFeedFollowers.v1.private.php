<?php

/**
 * @apiGroup           User
 * @apiName            getFeedFollowers
 *
 * @api                {GET} /v1/user/{id}/feed/followers Get Feed Followers
 * @apiDescription     Get specified user's feed followers
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('user/{id}/feed/followers', [
    'as' => 'api_user_get_feed_followers',
    'uses'  => 'Controller@getFeedFollowers',
//    'middleware' => [
//      'auth:api',
//    ],
]);
