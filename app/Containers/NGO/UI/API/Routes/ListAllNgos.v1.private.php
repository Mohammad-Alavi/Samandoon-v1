<?php

/**
 * @apiGroup           NGO
 * @apiName            listAllNGOs
 *
 * @api                {GET} /v1/ngo List NGOs
 * @apiDescription     Lists all NGOs (if no query parameter is given)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Ngo",
            "id": "kjeonp5eordqzvb8",
            "name": "Metz, Denesik and Feeney",
            "description": "Pepper For a minute or two to think this a very deep well. Either the well was very glad to find herself talking familiarly with them, as if she could have been ill.' 'So they were,' said the King.",
            "subject": "maiores",
            "area_of_activity": "Torranceburgh",
            "address": "9272 Angeline Corner\nMadalynfurt, MT 89782-1979",
            "registration_date": "1977-07-11",
            "registration_number": 84163,
            "national_number": 22219,
            "license_number": 90649,
            "license_date": "1978-10-18",
            "logo_photo_path": "297952626",
            "banner_photo_path": "456262418",
            "user_id": 2,
            "created_at": {
            "date": "2017-06-27 02:41:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-06-27 02:41:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "6 hours ago",
            "readable_updated_at": "6 hours ago",
            "real_id": 1
        },
    ],
    "meta": {
    "include": [],
        "custom": [],
        "pagination": {
        "total": 51,
            "count": 10,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 6,
            "links": {
            "next": "http://api.apiato.dev/v1/ngo?page=2"
            }
        }
    }
}
*/

$router->get('ngo', [
    'uses'  => 'Controller@listAllNgos',
    'middleware' => [
      'auth:api',
    ],
]);
