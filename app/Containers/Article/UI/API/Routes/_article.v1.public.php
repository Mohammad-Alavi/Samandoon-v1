<?php

/**
 * @apiDefine ArticleSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": {
    "msg": "Some informative msg here or null",
        "object": {
        "object": "Article",
            "id": "3mjzyg5dp5a0vwp6",
            "text": "Some random texts and description for nealy created Article",
            "image": {
                "article_image": "http://api.samandoon.local/v1/storage/8/pepeWallpepeR.jpg",
                "article_image_thumb": "http://api.samandoon.local/v1/storage/8/conversions/thumb.jpg"
            },
            "ngo_id": "kjeonp5eordqzvb8",
            "created_at": {
            "date": "2017-12-11 10:00:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-12-11 10:00:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "like_count": 2,
            "view_article": {
            "href": "v1/ngo/article/3mjzyg5dp5a0vwp6",
                "method": "GET"
            }
        },
        "NGO": {
        "data": {
            "msg": null,
                "object": {
                "object": "NGO",
                    "id": "kjeonp5eordqzvb8",
                    "name": "مهرگان كرشته",
                    "description": null,
                    "subjects": [],
                    "area_of_activity": null,
                    "address": "----",
                    "zip_code": "0",
                    "type": "شركت سهامي خاص",
                    "confirmed": false,
                    "logo_photo": "",
                    "banner_photo": "",
                    "user_id": "3mjzyg5dp5a0vwp6",
                    "Registration specification": {
                    "national_number": "10100000006",
                        "registration_number": "17",
                        "registration_date": "1350/01/23",
                        "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري شهريار"
                    },
                    "view_ngo": {
                    "href": "v1/ngo/kjeonp5eordqzvb8",
                        "method": "GET"
                    }
                }
            }
        }
    },
    "meta": {
    "include": [
        "ngo",
        "user"
    ],
        "custom": []
    }
}
*/