<?php

/**
 * @apiDefine EventSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "Some informative msg here",
        "event": {
        "object": "Event",
            "id": "qv4jdwrw0lanm6xg",
            "title": "Event Title",
            "description": null,
            "event_date": {
            "date": "2016-12-08 13:16:00.000000",
                "timezone_type": 2,
                "timezone": "GMT"
            },
            "location": null,
            "banner_image": null,
            "created_at": {
            "date": "2017-11-26 22:22:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-11-26 22:22:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago",
            "ngo": {
            "object": "NGO",
                "id": "3mjzyg5dp5a0vwp6",
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
                "user_id": "a0dg7o53grq4m3pn",
                "Registration specification": {
                "national_number": "14004590766",
                    "registration_number": "236",
                    "registration_date": "1393/09/12",
                    "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري آبادان"
                }
            }
        },
        "view_event": {
        "href": "v1/event/qv4jdwrw0lanm6xg",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/