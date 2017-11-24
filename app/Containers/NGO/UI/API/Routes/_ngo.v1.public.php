<?php

/**
 * @apiDefine NGOSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "Some informative msg here",
        "ngo": {
        "object": "NGO",
            "id": "kjeonp5eordqzvb8",
            "name": "Edrar Ngo 2",
            "description": null,
            "subjects": [],
            "area_of_activity": "Edrar Area",
            "address": null,
            "zip_code": null,
            "type": null,
            "confirmed": null,
            "logo_photo": null,
            "banner_photo": null,
            "user_id": "3mjzyg5dp5a0vwp6",
            "Registration specification": {
            "national_number": null,
                "registration_number": null,
                "registration_date": null,
                "registration_unit": null
            },
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago"
        },
        "view_ngo": {
        "href": "v1/ngo/kjeonp5eordqzvb8",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/