<?php

/**
 * @apiGroup           Event
 * @apiName            GetAuthenticatedUserNgoEvents
 *
 * @api                {GET} /v1/user/ngo/events Get authenticated user NGO Events
 * @apiDescription     Get events of the authenticated user NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Owner
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Event",
            "id": "x680j7ro7l4kdqbe",
            "title": "انجمن برنامه نویسان آبادان 223",
            "description": null,
            "event_date": "2016-10-10 06:17:00",
            "location": null,
            "photo_path": null,
            "ngo_id": 22,
            "created_at": {
            "date": "2017-07-01 13:03:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-07-01 13:03:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "4 seconds ago",
            "readable_updated_at": "4 seconds ago"
        }
    ],
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->get('user/ngo/events', [
    'uses'  => 'Controller@getAuthenticatedUserNgoEvents',
    'middleware' => [
      'auth:api',
    ],
]);
