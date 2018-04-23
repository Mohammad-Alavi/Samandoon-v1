<?php

/**
 * @apiGroup           Article
 * @apiName            getLikers
 *
 * @api                {GET} /v1/ngo/article/{article_id}/likers Get Likers
 * @apiDescription     Get the likers of the specified article
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiExample         {url} Example usage:
 * api.samandoon.ngo/v1/ngo/article/kjeonp5eordqzvb8/likers?orderBy=created_at&sortedBy=desc
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "User",
                "id": "3mjzyg5dp5a0vwp6",
                "first_name": "Mohammad",
                "last_name": "Alavi",
                "email": "m.alavi1989@gmail.com",
                "images": {
                    "avatar_thumb": "http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg"
                },
                "confirmed": false,
                "gender": null,
                "birth": null,
                "ngo_id": "kjeonp5eordqzvb8",
                "view_user": {
                "href": "v1/user/3mjzyg5dp5a0vwp6",
                    "method": "GET"
                }
        },
        {
            "object": "User",
                "id": "qv4jdwrw0lanm6xg",
                "first_name": "Mohammad",
                "last_name": "Alavi",
                "email": "m.alavi1992@gmail.com",
                "images": {
                    "avatar_thumb": "http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg"
                },
                "confirmed": false,
                "gender": null,
                "birth": null,
                "ngo_id": "qv4jdwrw0lanm6xg",
                "view_user": {
                "href": "v1/user/qv4jdwrw0lanm6xg",
                    "method": "GET"
                }
        }
    ],
    "meta": {
    "pagination": {
        "per_page": 10,
            "current_page": 1,
            "total_pages": 1
        }
    }
}
*/

/** @var Route $router */
$router->get('ngo/article/{id}/likers', [
    'as' => 'api_article_get_likers',
    'uses'  => 'Controller@getLikers',
//    'middleware' => [
//      'auth:api',
//    ],
]);
