<?php

/**
 * @apiDefine NGOSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "Some informative msg here",
        "ngo": {
        "object": "Ngo",
            "id": "3mjzyg5dp5a0vwp6",
            "name": "Edrar Ngo",
            "description": null,
            "subject": "Edrar Subject",
            "area_of_activity": "Edrar Area",
            "address": null,
            "logo_photo_path": null,
            "banner_photo_path": null,
            "user_id": "3mjzyg5dp5a0vwp6",
            "Registration specification": {
                "registration_date": null,
                "registration_number": null,
                "national_number": null,
                "license_number": null,
                "license_date": null
            },
            "created_at": {
            "date": "2017-11-21 00:55:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-11-21 00:55:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago"
        },
        "view_ngo": {
        "href": "v1/ngo/3mjzyg5dp5a0vwp6",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/