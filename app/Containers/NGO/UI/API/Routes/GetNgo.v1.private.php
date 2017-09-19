<?php

/**
 * @apiGroup           NGO
 * @apiName            GetNGO
 *
 * @api                {GET} /v1/ngo/{id} Get NGO
 * @apiDescription     Get a NGO by ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
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
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->get('ngo/{id}', [
    'uses'  => 'Controller@getNgo',
    'middleware' => [
      'auth:api',
    ],
]);
