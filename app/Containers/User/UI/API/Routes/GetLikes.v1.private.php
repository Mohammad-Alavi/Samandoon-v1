<?php

/**
 * @apiGroup           User
 * @apiName            getLikes
 *
 * @api                {GET} /v1/user/{user_id}/likes Get Likes
 * @apiDescription     Get what the user has liked ( IT's USELESS IMO )
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String="article"}  type
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('user/{id}/likes', [
    'as' => 'api_user_get_likes',
    'uses'  => 'Controller@getLikes',
//    'middleware' => [
//      'auth:api',
//    ],
]);
