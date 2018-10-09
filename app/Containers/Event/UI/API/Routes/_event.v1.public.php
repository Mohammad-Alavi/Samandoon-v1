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
            "id": "oj64bp5zjl8ywzn0",
            "title": "پشم تست",
            "image": {
                "event_image": "http://api.samandoon.local/v1/storage/7/pepeWallpepeR.jpg",
                "event_image_thumb": "http://api.samandoon.local/v1/storage/7/conversions/thumb.jpg"
            },
            "location": {
                "city": "آبادان",
                "province": "خوزستان",
                "address": null,
                "lat": "57.098554",
                "long": "-1.822060"
            },
            "ngo_id": "kjeonp5eordqzvb8",
            "event_date": {
                "date": "2029-12-08 13:16:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "created_at": {
                "date": "2018-04-08 01:00:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2018-04-08 01:00:50.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "2 seconds ago",
            "readable_updated_at": "2 seconds ago"
        },
        "view_event": {
            "href": "v1/ngo/event/oj64bp5zjl8ywzn0",
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