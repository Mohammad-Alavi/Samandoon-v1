<?php

/**
 * @apiGroup           NGO
 * @apiName            sendKYCPhoto
 *
 * @api                {POST} /v1/ngo/kyc/photo KYC: Send Photo
 * @apiDescription     Send a KYC Photo to be added to the given NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {image}  image
 * @apiParam           {string="national_card_side_one", "national_card_side_two", "identity_paper", "ngo_registration_doc"}  label
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "KYCPhoto",
            "msg": null,
            "id": "9knz73rynlpdx0vy",
            "image": "http://api.samandoon.local/v1/storage/6/cd60429972b7dc9a281b44a3f2289abf.png",
            "label": "identity_paper",
            "status": "sent",
            "text": "",
            "ngo_id": "kjeonp5eordqzvb8",
            "admin_id": "",
            "created_at": {
            "date": "2018-07-17 19:03:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2018-07-17 19:03:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago"
        },
        {
            "object": "KYCPhoto",
            "msg": null,
            "id": "qv4jdwrw0lanm6xg",
            "image": "http://api.samandoon.local/v1/storage/5/29194079960e2607c39e35b191f1abbe.png",
            "label": "national_card_side_one",
            "status": "sent",
            "text": "",
            "ngo_id": "kjeonp5eordqzvb8",
            "admin_id": "",
            "created_at": {
            "date": "2018-07-17 19:03:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2018-07-17 19:03:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "34 seconds ago",
            "readable_updated_at": "34 seconds ago"
        },
        {
            "object": "KYCPhoto",
            "msg": null,
            "id": "oj64bp5zjl8ywzn0",
            "image": "http://api.samandoon.local/v1/storage/1/6efc42e741522db49a0de6eaa01b7f13.png",
            "label": "national_card_side_two",
            "status": "sent",
            "text": "",
            "ngo_id": "kjeonp5eordqzvb8",
            "admin_id": "",
            "created_at": {
            "date": "2018-07-17 19:03:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2018-07-17 19:03:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "readable_created_at": "41 seconds ago",
            "readable_updated_at": "41 seconds ago"
        }
    ],
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->post('ngo/kyc/photo', [
    'as' => 'api_ngo_send_k_y_c_photo',
    'uses'  => 'Controller@sendKYCPhoto',
    'middleware' => [
      'auth:api',
    ],
]);
