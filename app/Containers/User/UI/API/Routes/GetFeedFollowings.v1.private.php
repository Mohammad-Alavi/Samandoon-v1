<?php

/**
 * @apiGroup           User
 * @apiName            getFeedFollowings
 *
 * @api                {GET} /v1/user/{id}/feed/followings Get Feed Followings
 * @apiDescription     Get specified user's feed followings
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "results": [
        {
            "feed_id": "user:oj64bp5zjl8ywzn0",
            "target_id": "ngo:kjeonp5eordqzvb8",
            "created_at": "2018-02-11T13:50:38.373069Z",
            "updated_at": null
        }
    ],
    "duration": "1.77ms"
}
*/

/** @var Route $router */
$router->get('user/{id}/feed/followings', [
    'as' => 'api_user_get_feed_followings',
    'uses'  => 'Controller@getFeedFollowings',
//    'middleware' => [
//      'auth:api',
//    ],
]);
