<?php

/**
 * @apiDefine UserSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": 'Some informative msg here or null',
        "object": {
        "object": "User",
            "id": "qv4jdwrw0lanm6xg",
            "first_name": "Mohammad",
            "last_name": "Alavi",
            "email": "m.alavi1989@gmail.com",
            "images": {
                "avatar": "http://api.samandoon.local/v1/storage/5/pepeWallpepeR.jpg",
                "avatar_thumb": "http://api.samandoon.local/v1/storage/5/conversions/thumb.jpg"
            },
            "confirmed": false,
            "gender": null,
            "birth": null,
            "province": null,
            "city": null,
            "ngo_id": "ndvm9yrj4rao0jkq",
            "social_provider": null,
            "social_nickname": null,
            "social_id": null,
            "social_avatar": {
            "avatar": null,
                "original": null
            },
            "created_at": {
            "date": "2017-11-27 03:08:59.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-11-27 03:42:29.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "35 minutes ago",
            "readable_updated_at": "2 minutes ago"
        },
        "view_user": {
        "href": "v1/user/qv4jdwrw0lanm6xg",
            "method": "GET"
        },
        "roles": {
        "data": [
                {
                    "object": "Role",
                    "id": "3mjzyg5dp5a0vwp6",
                    "name": "user",
                    "description": "User",
                    "display_name": null,
                    "permissions": {
                    "data": [
                            {
                                "object": "Permission",
                                "id": "qv4jdwrw0lanm6xg",
                                "name": "manage-ngo",
                                "description": "Create, Update, Delete, List NGOs",
                                "display_name": "Manage NGO"
                            },
                            {
                                "object": "Permission",
                                "id": "9knz73rynlpdx0vy",
                                "name": "manage-event",
                                "description": "Create, Update, Delete, List Events",
                                "display_name": "Manage Event"
                            }
                        ]
                    }
                }
            ]
        }
    },
    "meta": {
    "include": [
        "roles"
    ],
        "custom": []
    }
}
*/