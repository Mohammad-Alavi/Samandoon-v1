<?php

/**
 * @apiDefine NGOSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "ُSome informative msg here or Null",
        "object": {
        "object": "NGO",
            "id": "e8dz0jl84rngaxv3",
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
            "user_id": "ndvm9yrj4rao0jkq",
            "Registration specification": {
            "national_number": "14004590766",
                "registration_number": "236",
                "registration_date": "1393/09/12",
                "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري آبادان"
            },
            "view_ngo": {
            "href": "v1/ngo/e8dz0jl84rngaxv3",
                "method": "GET"
            }
        },
        "events": {
        "data": [
                {
                    "msg": null,
                    "object": {
                    "object": "Event",
                        "id": "x680j7ro7l4kdqbe",
                        "title": "Event Title",
                        "description": null,
                        "event_date": "2016-12-08 13:16:00",
                        "location": null,
                        "banner_image": "ndvm9yrj4rao0jkq/e8dz0jl84rngaxv3/event_images/eeG5ithisNoWSd4nnvtZZbzXT8qKptEFjMSKzyVk.png",
                        "created_at": {
                        "date": "2017-11-30 04:55:32.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                        "date": "2017-11-30 04:57:04.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "readable_created_at": "25 minutes ago",
                        "readable_updated_at": "23 minutes ago"
                    },
                    "view_event": {
                    "href": "v1/event/x680j7ro7l4kdqbe",
                        "method": "GET"
                    }
                }
            ]
        }
    },
    "meta": {
    "include": [
        "User",
        "Events"
    ],
        "custom": []
    }
}
*/