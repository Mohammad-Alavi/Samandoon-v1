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
            "title": "New Event",
            "description": null,
            "event_date": {
            "date": "2016-10-12 10:09:00.000000",
                "timezone_type": 2,
                "timezone": "GMT"
            },
            "location": null,
            "banner_image": "event_image/banner_image/CpxxKJRvgLt7GUuEJNgvjQAV0lkQ4NqYbLCRvPZa.png",
            "created_at": {
            "date": "2017-11-27 04:13:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-11-27 04:13:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago"
        },
        "view_event": {
        "href": "v1/event/pm8njbr9jl9eko4w",
            "method": "GET"
        },
        "ngo": {
        "data": {
            "msg": null,
                "object": {
                "object": "NGO",
                    "id": "ndvm9yrj4rao0jkq",
                    "name": "انجمن همراهان محيط زيست آبادان",
                    "description": null,
                    "subjects": [],
                    "area_of_activity": null,
                    "address": "احمدآباد خيابان 15 منازل شركتي پلاك 3412",
                    "zip_code": "0000000000",
                    "type": "موسسه غير تجاري",
                    "confirmed": false,
                    "logo_photo": null,
                    "banner_photo": null,
                    "user_id": "qv4jdwrw0lanm6xg",
                    "Registration specification": {
                    "national_number": "14004590766",
                        "registration_number": "236",
                        "registration_date": "1393/09/12",
                        "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري آبادان"
                    },
                    "view_ngo": {
                    "href": "v1/ngo/ndvm9yrj4rao0jkq",
                        "method": "GET"
                    }
                }
            }
        }
    },
    "meta": {
    "include": [
        "NGO"
    ],
        "custom": []
    }
}
*/