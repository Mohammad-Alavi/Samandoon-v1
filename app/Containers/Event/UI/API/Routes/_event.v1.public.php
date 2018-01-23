<?php

/**
 * @apiDefine EventSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "Some informative msg here or null",
        "object": {
        "object": "Event",
            "id": "pm8njbr9jl9eko4w",
            "title": "Some event title",
            "description": "Some event description",
            "event_image": "http://api.samandoon.local/v1/storage/10/43c4",
            "event_date": {
            "date": "2016-12-08 13:16:00.000000",
                "timezone_type": 2,
                "timezone": "GMT"
            },
            "location": null,
            "created_at": {
            "date": "2018-01-23 07:19:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2018-01-23 07:19:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago"
        },
        "view_event": {
        "href": "v1/ngo/event/dj",
            "method": "GET"
        }
    },
    "meta": {
    "include": [
        "ngo"
    ],
        "custom": []
    }
}
*/