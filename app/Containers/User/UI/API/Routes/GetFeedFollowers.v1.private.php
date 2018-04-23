<?php

/**
 * @apiGroup           User
 * @apiName            getFollowers
 *
 * @api                {GET} /v1/user/{id}/feed/followers Get Followers
 * @apiDescription     Get the specified NGO followers
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
            "object": "User",
                "id": "kjeonp5eordqzvb8",
                "first_name": "Super",
                "last_name": "Admin",
                "email": "admin@admin.com",
                "avatar": "http://api.samandoon.local/v1/storage/default_images/avatar.png",
                "confirmed": false,
                "gender": null,
                "birth": null,
                "ngo_id": null,
                "social_auth_provider": null,
                "social_nickname": null,
                "social_id": null,
                "social_avatar": {
                "avatar": null,
                    "original": null
                },
                "created_at": {
                "date": "2018-02-10 11:22:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                "date": "2018-02-10 11:22:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "readable_created_at": "1 week ago",
                "readable_updated_at": "1 week ago",
                "view_user": {
                "href": "v1/user/kjeonp5eordqzvb8",
                    "method": "GET"
                },
                "stats": {
                "ngo_subscriptions_count": 0
                }
            }
        },
        {
            "msg": null,
            "object": {
            "object": "User",
                "id": "oj64bp5zjl8ywzn0",
                "first_name": "Mohammad",
                "last_name": "Alavi",
                "email": "m.alavi1991@gmail.com",
                "avatar": "http://api.samandoon.local/v1/storage/default_images/avatar.png",
                "confirmed": false,
                "gender": null,
                "birth": null,
                "ngo_id": null,
                "social_auth_provider": null,
                "social_nickname": null,
                "social_id": null,
                "social_avatar": {
                "avatar": null,
                    "original": null
                },
                "created_at": {
                "date": "2018-02-11 11:45:43.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                "date": "2018-02-11 11:45:43.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "readable_created_at": "1 week ago",
                "readable_updated_at": "1 week ago",
                "view_user": {
                "href": "v1/user/oj64bp5zjl8ywzn0",
                    "method": "GET"
                },
                "stats": {
                "ngo_subscriptions_count": 0
                }
            }
        }
    ],
    "meta": {
    "include": [
        "roles",
        "ngo"
    ],
        "custom": [],
        "pagination": {
        "total": 2,
            "count": 2,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 1,
            "links": []
        }
    }
}
*/
/** @var Route $router */
$router->get('user/{id}/feed/followers', [
    'as' => 'api_user_get_feed_followers',
    'uses'  => 'Controller@getFeedFollowers',
//    'middleware' => [
//      'auth:api',
//    ],
]);
