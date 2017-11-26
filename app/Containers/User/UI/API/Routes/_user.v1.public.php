<?php

/**
 * @apiDefine UserSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "User created",
        "user": {
        "object": "User",
            "id": "a0dg7o53grq4m3pn",
            "first_name": "Mohammad",
            "last_name": "Alavi",
            "email": "m.alavi1989@gmail.com",
            "avatar": null,
            "confirmed": false,
            "gender": null,
            "birth": null,
            "province": null,
            "city": null,
            "ngo_id": "",
            "social_provider": null,
            "social_nickname": null,
            "social_id": null,
            "social_avatar": {
            "avatar": null,
                "original": null
            },
            "created_at": {
            "date": "2017-11-26 01:34:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-11-26 01:34:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "7 seconds ago",
            "readable_updated_at": "7 seconds ago"
        },
        "view_user": {
        "href": "v1/user/a0dg7o53grq4m3pn",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/
