<?php

/**
 * @apiGroup           Article
 * @apiName            createComment
 *
 * @api                {POST} /v1/ngo/article/{id}/comment Create Comment
 * @apiDescription     Create a comment on the Article
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {Text} body Comment body
 * @apiParam           {String} [parent_id] Comment's parent ID (e.g. an answer/replay)
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "object": "Comment",
        "id": "oj64bp5zjl8ywzn0",
        "body": "ناموسن سومین کامنت نرینه صلوات!",
        "commentable_id": "kjeonp5eordqzvb8",
        "commentable_type": "Article",
        "creator_id": "3mjzyg5dp5a0vwp6",
        "creator_type": "User",
        "creator_data": {
        "first_name": "Mohammad",
            "last_name": "Alavi",
            "images": {
            "avatar_thumb": "http://api.samandoon.local/v1/storage/default_images/avatar_thumb.png"
            },
            "ngo_data": {
            "ngo_id": "kjeonp5eordqzvb8",
                "name": "روستائي راشته",
                "confirmed": null
            }
        },
        "_lft": 7,
        "_rgt": 8,
        "parent_id": null,
        "created_at": {
        "date": "2018-08-13 09:20:32.000000",
            "timezone_type": 3,
            "timezone": "Asia/Tehran"
        },
        "updated_at": {
        "date": "2018-08-13 09:20:32.000000",
            "timezone_type": 3,
            "timezone": "Asia/Tehran"
        },
        "commented_on_ngo": {
        "data": {
            "msg": null,
                "object": {
                "object": "NGO",
                    "id": "kjeonp5eordqzvb8",
                    "name": "روستائي راشته",
                    "public_name": "10100000010",
                    "description": null,
                    "area_of_activity": null,
                    "location": {
                    "city": null,
                        "province": null,
                        "address": "----"
                    },
                    "status": "ابطال شده",
                    "subject": [],
                    "phone": [],
                    "zip_code": "0",
                    "type": "شركت تعاوني",
                    "verification_status": "unverified",
                    "verification_admin_id": "",
                    "images": {
                    "ngo_logo": "http://api.samandoon.local/v1/storage/default_images/ngo_logo.png",
                        "ngo_logo_thumb": "http://api.samandoon.local/v1/storage/default_images/ngo_logo_thumb.png",
                        "ngo_banner": "http://api.samandoon.local/v1/storage/default_images/ngo_banner.png",
                        "ngo_banner_thumb": "http://api.samandoon.local/v1/storage/default_images/ngo_banner_thumb.png"
                    },
                    "user_id": "3mjzyg5dp5a0vwp6",
                    "registration_specification": {
                    "national_number": "10100000010",
                        "registration_number": "13",
                        "registration_date": "1345/12/25",
                        "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري شهريار"
                    },
                    "created_at": {
                    "date": "2018-08-13 09:13:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia/Tehran"
                    },
                    "updated_at": {
                    "date": "2018-08-13 09:13:28.000000",
                        "timezone_type": 3,
                        "timezone": "Asia/Tehran"
                    },
                    "readable_created_at": "7 minutes ago",
                    "readable_updated_at": "7 minutes ago",
                    "view_ngo": {
                    "href": "v1/ngo/kjeonp5eordqzvb8",
                        "method": "GET"
                    },
                    "stats": {
                    "is_following": false,
                        "followers_count": 0,
                        "article_count": 1,
                        "event_count": 0
                    }
                }
            },
            "meta": {
            "include": [
                "user"
            ],
                "custom": []
            }
        },
        "view_comment": {
        "href": "v1/ngo/article/comment/oj64bp5zjl8ywzn0",
            "method": "GET"
        }
    }
}
*/

/** @var Route $router */
$router->post('ngo/article/{id}/comment', [
    'as' => 'api_article_create_comment',
    'uses'  => 'Controller@createComment',
    'middleware' => [
      'auth:api',
    ],
]);
