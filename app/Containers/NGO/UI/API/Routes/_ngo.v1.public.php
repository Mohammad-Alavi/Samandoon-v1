<?php

/**
 * @apiDefine NGOSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "Some informative msg here or null",
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
    },
    "meta": {
    "include": [
        "User"
    ],
        "custom": []
    }
}
*/