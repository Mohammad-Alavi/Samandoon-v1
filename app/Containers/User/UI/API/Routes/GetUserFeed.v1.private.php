<?php

/**
 * @apiGroup           User
 * @apiName            getUserFeed
 *
 * @api                {GET} /v1/user/{id}/feed Get User's Feed
 * @apiDescription     Return the user activity feed
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('user/{id}/feed', [
    'as' => 'api_user_get_user_feed',
    'uses'  => 'Controller@getUserFeed',
    'middleware' => [
        'auth:api',
    ],
]);
