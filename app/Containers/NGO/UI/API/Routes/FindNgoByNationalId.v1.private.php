<?php

/**
 * @apiGroup           NGO
 * @apiName            findNgoByNationalId
 *
 * @api                {GET} /v1/ngo/find/{national_id} Find NGO By National ID
 * @apiDescription     Search a NGO in National Registration website and return it's data if ngo is found
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  national_id
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
    "object": "NGO",
        "id": "",
        "name": "انجمن همراهان محيط زيست آبادان",
        "description": null,
        "subjects": [],
        "area_of_activity": null,
        "address": "احمدآباد خيابان 15 منازل شركتي پلاك 3412",
        "zip_code": "0000000000",
        "type": "موسسه غير تجاري",
        "confirmed": false,
        "logo_photo": null,
        "banner_photo": null,
        "user_id": "",
        "Registration specification": {
        "national_number": "14004590766",
            "registration_number": "236",
            "registration_date": "1393/09/12",
            "registration_unit": "مرجع ثبت شركت ها و موسسات غيرتجاري آبادان"
        }
    },
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->get('ngo/find/{national_id}', [
    'as' => 'api_ngo_find_ngo_by_national_id',
    'uses'  => 'Controller@findNgoByNationalId',
    'middleware' => [
      'auth:api',
    ],
]);
