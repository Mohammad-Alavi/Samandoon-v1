<?php

/**
 * @apiGroup           Event
 * @apiName            UpdateEvent
 *
 * @api                {put}  /v1/event/{id} Update Event
 * @apiDescription     Update a given event
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User / Owner
 *
 * @apiParam           {string}  title (optional)
 * @apiParam           {text}  description (optional)
 * @apiParam           {dateTime}  event_date (optional) date_format:YmdHiT
 * @apiParam           {image}  event_photo (optional)
 * @apiParam           {text} location (optional)

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "msg": "Event updated",
    "event": {
        "object": "Event",
      "id": "3a8wvzlg3r7n0e4m",
      "title": "Seventh Event",
      "description": "Event number 7",
      "event_date": {
            "date": "2016-10-13 15:04:00.000000",
        "timezone_type": 2,
        "timezone": "EST"
      },
      "photo_path": null,
      "location": null,
      "created_at": {
            "date": "2017-06-10 03:50:39.000000",
        "timezone_type": 3,
        "timezone": "UTC"
      },
      "updated_at": {
            "date": "2017-06-10 04:13:05.000000",
        "timezone_type": 3,
        "timezone": "UTC"
      },
      "readable_created_at": "22 minutes ago",
      "readable_updated_at": "1 second ago",
      "real_id": 7
    },
    "view_event": {
        "href": "v1/event/7",
      "method": "GET"
    }
  },
  "meta": {
    "include": [],
    "custom": []
  }
}
*/

$router->put('/event/{id}', [
    'uses'  => 'Controller@updateEvent',
    'middleware' => [
      'auth:api',
    ],
]);
