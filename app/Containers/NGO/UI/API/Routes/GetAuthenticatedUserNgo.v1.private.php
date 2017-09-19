<?php

/**
 * @apiGroup           NGO
 * @apiName            GetAuthenticatedUserNgo
 *
 * @api                {GET} /v1/user/ngo Get authenticated user NGO
 * @apiDescription     Gets the authenticated user's ngo
 *
 * @apiVersion         1.0.0
 * @apiPermission      Owner
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "object": "Ngo",
        "id": "6mqkpblv7loev403",
        "name": "edrar1234",
        "description": null,
        "subject": "lililoool",
        "area_of_activity": "آبادان",
        "address": null,
        "registration_date": null,
        "registration_number": null,
        "national_number": null,
        "license_number": null,
        "license_date": null,
        "logo_photo_path": null,
        "banner_photo_path": null,
        "user_id": 3,
        "created_at": {
        "date": "2017-07-01 00:32:50.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
        "date": "2017-07-01 00:32:50.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "readable_created_at": "3 minutes ago",
        "readable_updated_at": "3 minutes ago"
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->get('user/ngo', [
    'uses'  => 'Controller@getAuthenticatedUserNgo',
    'middleware' => [
      'auth:api',
    ],
]);
