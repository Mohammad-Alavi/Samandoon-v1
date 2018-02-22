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
            "name": "مهرگان كرشته",
            "description": null,
            "subjects": [],
            "area_of_activity": null,
            "location": {
                "city": "آبادان",
                "province": "خوزستان",
                "address": "----"
            },
            "zip_code": "6316713649",
            "type": "شركت سهامي خاص",
            "confirmed": false,
            "ngo_logo": "http://api.samandoon.local/v1/storage/21/6cf4b3e93caef896b27dd9140f7171a5.jpg",
            "ngo_banner": "http://api.samandoon.local/v1/default_images/ngo_banner.png",
            "user_id": "Je",
            "registration_specification": {
            "national_number": "10100000006",
                "registration_number": "17",
                "registration_date": "1350/01/23",
                "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري شهريار"
            },
            "created_at": {
            "date": "2018-01-20 06:41:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2018-01-20 09:02:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "2 hours ago",
            "readable_updated_at": "24 minutes ago",
            "view_ngo": {
            "href": "v1/ngo/Je",
                "method": "GET"
            },
            "stats": {
            "is_subscribed": true,
            "subscribers_count": 2
            }
        }
    },
    "meta": {
    "include": [
        "user"
    ],
        "custom": []
    }
*/