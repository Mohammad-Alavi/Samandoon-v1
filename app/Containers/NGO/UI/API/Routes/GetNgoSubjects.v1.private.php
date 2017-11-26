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
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Subject",
            "id": 1,
            "subject": "test1"
        },
        {
            "object": "Subject",
            "id": 2,
            "subject": "test2"
        },
        {
            "object": "Subject",
            "id": 3,
            "subject": "test3"
        },
        {
            "object": "Subject",
            "id": 4,
            "subject": "test4"
        }
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
