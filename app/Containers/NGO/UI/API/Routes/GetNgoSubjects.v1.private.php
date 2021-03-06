<?php

/**
 * @apiGroup           NGO
 * @apiName            getNgoSubjects
 *
 * @api                {GET} /v1/ngo/resources/subject Get NGO Subjects
 * @apiDescription     Get all ngo subjects
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
HTTP/1.1 200 OK
{
    "data": [
        {
            "msg": "Found Subject",
            "object": {
                "object": "Subject",
                "id": 1,
                "subject": "علمی"
            }
        },
        {
            "msg": "Found Subject",
            "object": {
                "object": "Subject",
                "id": 2,
                "subject": "فرهنگی"
            }
        },
        {
            "msg": "Found Subject",
            "object": {
                "object": "Subject",
                "id": 3,
                "subject": "اجتماعی"
            }
        },
    ],
    "meta": {
    "include": [],
        "custom": [],
        "pagination": {
        "total": 4,
            "count": 4,
            "per_page": 1000,
            "current_page": 1,
            "total_pages": 1,
            "links": []
        }
    }
}
*/

$router->get('ngo/resources/subject', [
    'as' => 'api_ngo_get_ngo_subjects',
    'uses'  => 'Controller@getNgoSubjects',
]);
