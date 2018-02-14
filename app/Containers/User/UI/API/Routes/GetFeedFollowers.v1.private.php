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
    "results": [
        {
            "feed_id": "user:3mjzyg5dp5a0vwp6",
            "target_id": "ngo:kjeonp5eordqzvb8",
            "created_at": "2018-02-14T08:30:27.297125Z",
            "updated_at": null
        },
        {
            "feed_id": "user:oj64bp5zjl8ywzn0",
            "target_id": "ngo:kjeonp5eordqzvb8",
            "created_at": "2018-02-11T13:50:38.373069Z",
            "updated_at": null
        },
        {
            "feed_id": "user:kjeonp5eordqzvb8",
            "target_id": "ngo:kjeonp5eordqzvb8",
            "created_at": "2018-02-11T13:50:15.903338Z",
            "updated_at": null
        }
    ],
    "duration": "2.60ms"
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
