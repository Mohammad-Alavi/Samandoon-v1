<?php

/**
 * @apiDefine EventSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK

{
    "data": {
    "msg": "Informative msg here",
        "event": {
        "object": "Event",
            "id": "kjeonp5eordqzvb8",
            "title": "Test Update Event",
            "description": null,
            "event_date": {
            "date": "2016-12-08 13:16:00.000000",
                "timezone_type": 2,
                "timezone": "GMT"
            },
            "location": null,
            "photo_path": null,
            "created_at": {
            "date": "2017-11-19 01:29:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-11-19 02:09:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "40 minutes ago",
            "readable_updated_at": "1 second ago",
            "ngo": {
            "object": "Ngo",
                "id": "kjeonp5eordqzvb8",
                "name": "Edrar Ngo",
                "description": null,
                "subject": "Edrar Subject",
                "area_of_activity": "Edrar Area",
                "address": null,
                "registration_date": null,
                "registration_number": null,
                "national_number": null,
                "license_number": null,
                "license_date": null,
                "logo_photo_path": null,
                "banner_photo_path": null,
                "user_id": "3mjzyg5dp5a0vwp6",
                "created_at": {
                "date": "2017-11-19 01:29:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                "date": "2017-11-19 01:29:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "readable_created_at": "40 minutes ago",
                "readable_updated_at": "40 minutes ago"
            }
        },
        "view_event": {
        "href": "v1/event/kjeonp5eordqzvb8",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/