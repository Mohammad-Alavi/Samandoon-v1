<?php

/**
 * @apiGroup           User
 * @apiName            getUserFeed
 *
 * @api                {GET} /v1/user/feed/get Get User's Feed
 * @apiDescription     Return the user's activity feed
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "msg": null,
            "object": {
            "object": "Article",
                "id": "9knz73rynlpdx0vy",
                "text": "Article Text 2",
                "article_image": null,
                "ngo_id": "3mjzyg5dp5a0vwp6",
                "created_at": {
                "date": "2018-02-26 05:42:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                "date": "2018-02-26 05:42:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "readable_created_at": "3 days ago",
                "readable_updated_at": "3 days ago",
                "like_count": 0,
                "liked_by_current_user": false,
                "view_article": {
                "href": "v1/ngo/article/9knz73rynlpdx0vy",
                    "method": "GET"
                }
            }
        },
        {
            "msg": null,
            "object": {
            "object": "Article",
                "id": "qv4jdwrw0lanm6xg",
                "text": "Article Text 1",
                "article_image": null,
                "ngo_id": "3mjzyg5dp5a0vwp6",
                "created_at": {
                "date": "2018-02-26 05:42:47.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                "date": "2018-02-26 05:42:47.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "readable_created_at": "3 days ago",
                "readable_updated_at": "3 days ago",
                "like_count": 0,
                "liked_by_current_user": false,
                "view_article": {
                "href": "v1/ngo/article/qv4jdwrw0lanm6xg",
                    "method": "GET"
                }
            }
        }
    ],
    "meta": {
    "include": [
        "ngo",
        "user"
    ],
        "custom": [],
        "pagination": {
        "total": 5,
            "count": 5,
            "per_page": 15,
            "current_page": 1,
            "total_pages": 1,
            "links": []
        }
    }
}
/*
/** @var Route $router */
$router->get('user/feed/get', [
    'as' => 'api_user_get_user_feed',
    'uses'  => 'Controller@getUserFeed',
    'middleware' => [
        'auth:api',
    ],
]);
