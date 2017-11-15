<?php

/**
 * @apiGroup           NGO
 * @apiName            CreateNGO
 *
 * @api                {POST} /v1/ngo Create NGO
 * @apiDescription     Create a NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  name (required) required|max:255|unique:ngos,name
 * @apiParam           {text}  description (optional)
 * @apiParam           {String}  subject (required) required|max:255
 * @apiParam           {String}  area_of_activity (required) required|max:255
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
    "msg": "Ngo created",
        "ngo": {
        "object": "Ngo",
            "id": "a0dg7o534grq4m3p",
            "name": "انجمن برنامه نویسان آبادان",
            "description": null,
            "subject": "فرهنگی-ورزشی",
            "area_of_activity": "شهرستان آبادان",
            "address": null,
            "registration_date": null,
            "registration_number": null,
            "national_number": null,
            "license_number": null,
            "license_date": null,
            "logo_photo_path": null,
            "banner_photo_path": null,
            "user_id": "a0dg5o534grq4s3p",
            "created_at": {
            "date": "2017-06-27 08:39:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-06-27 08:39:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago",
            "real_id": 51
        },
        "view_ngo": {
        "href": "v1/ngo/51",
            "method": "GET"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->post('ngo', [
    'uses'  => 'Controller@createNgo',
    'middleware' => [
      'auth:api',
    ],
]);
