<?php

/**
 * @apiGroup           NGO
 * @apiName            UpdateNGO
 *
 * @api                {PUT} /v1/ngo/{id} Update NGO
 * @apiDescription     Update a given NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Owner | Admin
 *
 * @apiParam           {String}  name (optional) max:255|unique:ngos,name
 * @apiParam           {text}  description (optional)
 * @apiParam           {String}  subject (optional) max:255
 * @apiParam           {String}  area_of_activity (optional) max:255
 * @apiParam           {text}  address (optional)
 * @apiParam           {date}  registration_date (optional) date_format:YmdHiT
 * @apiParam           {date}  license_date (optional) date_format:YmdHiT
 * @apiParam           {integer}  registration_number (optional) unique:ngos,registration_number
 * @apiParam           {integer}  national_number (optional) unique:ngos,national_number
 * @apiParam           {integer}  license_number (optional) unique:ngos,license_number
 * @apiParam           {image}  logo_photo (optional)
 * @apiParam           {image}  banner_photo (optional)
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "msg": "Ngo updated",
        "ngo": {
        "object": "Ngo",
            "id": "a0dg7o53grq4m3pn",
            "name": "انجمن هنتوشان",
            "description": "I suppose, by being drowned in my time, but never ONE with such a puzzled expression that she had been to a mouse: she had this fit) An obstacle that came between Him, and ourselves, and it. Don't.",
            "subject": "فرهنگی-سلامتی",
            "area_of_activity": "North Anne",
            "address": "817 Stroman Route\nRainaberg, TN 93696",
            "registration_date": "2015-09-08",
            "registration_number": 100108,
            "national_number": 77836,
            "license_number": 105178,
            "license_date": "1971-08-05",
            "logo_photo_path": "634475519",
            "banner_photo_path": "131333280",
            "user_id": 4,
            "created_at": {
            "date": "2017-06-27 02:41:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-06-27 09:04:46.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "6 hours ago",
            "readable_updated_at": "1 second ago",
            "real_id": 3
        },
        "view_ngo": {
        "href": "v1/ngo/3",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->put('ngo/{id}', [
    'uses'  => 'Controller@updateNgo',
    'middleware' => [
      'auth:api',
    ],
]);
