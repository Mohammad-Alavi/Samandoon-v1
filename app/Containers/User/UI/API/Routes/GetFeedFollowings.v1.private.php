<?php

/**
 * @apiGroup           User
 * @apiName            getFollowings
 *
 * @api                {GET} /v1/user/{id}/feed/followings Get Followings
 * @apiDescription     Returns NGO's that this user is followings
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
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
                "ngo_logo": "http://api.samandoon.local/v1/storage/default_images/ngo_logo.png",
                "ngo_banner": "http://api.samandoon.local/v1/storage/default_images/ngo_banner.png",
                "user_id": "3mjzyg5dp5a0vwp6",
                "registration_specification": {
                "national_number": "10100000006",
                    "registration_number": "17",
                    "registration_date": "1350/01/23",
                    "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري شهريار"
                },
                "created_at": {
                "date": "2018-02-10 11:24:13.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                "date": "2018-02-10 11:24:13.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "readable_created_at": "1 week ago",
                "readable_updated_at": "1 week ago",
                "view_ngo": {
                "href": "v1/ngo/kjeonp5eordqzvb8",
                    "method": "GET"
                },
                "stats": {
                "is_subscribed": false,
                    "subscribers_count": 0
                }
            }
        }
    ],
    "meta": {
    "include": [
        "user"
    ],
        "custom": [],
        "pagination": {
        "total": 1,
            "count": 1,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 1,
            "links": []
        }
    }
}
*/
/** @var Route $router */
$router->get('user/{id}/feed/followings', [
    'as' => 'api_user_get_feed_followings',
    'uses'  => 'Controller@getFeedFollowings',
//    'middleware' => [
//      'auth:api',
//    ],
]);
