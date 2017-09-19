<?php

/**
 * @apiGroup           Event
 * @apiName            ListAllEvents
 *
 * @api                {get}  /v1/event List Events
 * @apiDescription     Lists all Events (if no query parameter is given)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Admin
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "object": "Event",
    "id": "3a8wvzlg3r7n0e4m",
    "title": "edrarEvent",
    "description": "lilcription",
    "event_date": "2015-10-13 15:04:00",
    "photo_path": null,
    "created_at": {
        "date": "2017-06-10 03:50:39.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "updated_at": {
        "date": "2017-06-10 03:50:39.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "readable_created_at": "18 seconds ago",
    "readable_updated_at": "18 seconds ago",
    "real_id": 7
  },
  "meta": {
    "include": [],
    "custom": []
  }
}
*/

$router->get('/event', [
    'uses'  => 'Controller@listAllEvents',
    'middleware' => [
      'auth:api',
    ],
]);
