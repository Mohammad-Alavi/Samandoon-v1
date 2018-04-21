<?php

/**
 * @apiDefine CommentSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
    "data": [
        {
            "object": {
            "object": "Comment",
                "id": "9knz73rywnlpdx0v",
                "body": "ناموسن سومین کامنت نرینه صلوات!",
                "commentable_id": "a0dg7o53grq4m3pn",
                "commentable_type": "Article",
                "creator_id": "3mjzyg5dp5a0vwp6",
                "creator_type": "User",
                "creator_data": {
                    "first_name": "Mohammad",
                    "last_name": "Alavi",
                    "images": {
                        "avatar_thumb": "http://api.samandoon.local/v1/storage/1/conversions/thumb.jpg"
                    },
                    "ngo_data": {
                        "ngo_id": "kjeonp5eordqzvb8",
                        "name": "روستائي راشته",
                        "confirmed": false
                    }
                },
                "_lft": 36,
                "_rgt": 37,
                "parent_id": "dxwgmb50mrk340yo",
                "created_at": {
                "date": "2018-03-02 03:46:14.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                "date": "2018-03-02 03:46:14.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "view_comment": {
                "href": "v1/ngo/article/comment/9knz73rywnlpdx0v",
                    "method": "GET"
                }
            }
        }
    ],
    "meta": {
    "pagination": {
        "per_page": null,
            "current_page": null,
            "total_pages": null
        }
    }
}
*/