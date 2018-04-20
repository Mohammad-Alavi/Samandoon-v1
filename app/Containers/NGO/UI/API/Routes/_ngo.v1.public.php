<?php

/**
 * @apiDefine NGOSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "NGO Updated",
        "object": {
            "object": "NGO",
            "id": "kjeonp5eordqzvb8",
            "name": "روستائي راشته",
            "description": null,
            "subjects": [],
            "area_of_activity": null,
            "location": {
                "city": "آبادان",
                "province": "خوزستان",
                "address": "----"
            },
            "status": "ابطال شده",
            "subject": [
                {
                    "id": 1,
                    "subject": "علمی"
                },
                {
                    "id": 3,
                    "subject": "اجتماعی"
                }
            ],
            "phone": [
                {
                    "id": 1,
                    "label": "testLabel",
                    "phone_number": "06153224745"
                },
                    {
                    "id": 2,
                    "label": "testLabel",
                    "phone_number": "06153224745"
                }
            ]
            "zip_code": "6316713649",
            "type": "شركت تعاوني",
            "confirmed": false,
            "images": {
                "ngo_logo": "http://api.samandoon.local/v1/storage/2/pepeWallpepeR.jpg",
                "ngo_logo_thumb": "http://api.samandoon.local/v1/storage/2/conversions/thumb.jpg",
                "ngo_banner": "http://api.samandoon.local/v1/storage/3/Sketch%20%281%29.png",
                "ngo_banner_thumb": "http://api.samandoon.local/v1/storage/3/conversions/thumb.png"
            },
            "user_id": "3mjzyg5dp5a0vwp6",
            "registration_specification": {
                "national_number": "10100000010",
                "registration_number": "13",
                "registration_date": "1345/12/25",
                "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري شهريار"
            },
            "created_at": {
                "date": "2018-04-07 19:40:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2018-04-07 20:20:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "40 minutes ago",
            "readable_updated_at": "1 second ago",
            "view_ngo": {
                "href": "v1/ngo/kjeonp5eordqzvb8",
                "method": "GET"
            },
            "stats": {
                "is_following": false,
                "followers_count": 0
            }
        }
    },
    "meta": {
        "include": [
            "user"
        ],
        "custom": []
    }
}
*/