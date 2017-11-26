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
            "user_id": "3mjzyg5dp5a0vwp6",
            "Registration specification": {
            "national_number": "14004590766",
                "registration_number": "236",
                "registration_date": "1393/09/12",
                "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري آبادان"
            }
        },
        "view_ngo": {
        "href": "v1/ngo/e8dz0jl84rngaxv3",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/