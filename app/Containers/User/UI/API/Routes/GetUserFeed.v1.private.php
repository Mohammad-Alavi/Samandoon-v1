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
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
[
    {
        "activityId": "1c35e780-137b-11e8-8080-80000819dd20",
        "actorType": "ngo",
        "actorId": "kjeonp5eordqzvb8",
        "objectType": "event",
        "objectId": "9knz73rywnlpdx0v",
        "targetType": null,
        "targetId": null,
        "verb": "create",
        "time": {
        "date": "2018-02-17 00:41:02.329987",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    },
    {
        "activityId": "d547f200-137a-11e8-8080-800075e3481e",
        "actorType": "ngo",
        "actorId": "kjeonp5eordqzvb8",
        "objectType": "event",
        "objectId": "qv4jdwrw30lanm6x",
        "targetType": null,
        "targetId": null,
        "verb": "create",
        "time": {
        "date": "2018-02-17 00:41:02.330020",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
]
*/

/** @var Route $router */
$router->get('user/{id}/feed', [
    'as' => 'api_user_get_user_feed',
    'uses'  => 'Controller@getUserFeed',
    'middleware' => [
        'auth:api',
    ],
]);
