<?php

/**
 * @apiGroup           NGO
 * @apiName            deletePhoneNumber
 *
 * @api                {DELETE} /v1/ngo/resources/phone/{id} Delete Phone Number
 * @apiDescription     Deletes the given phone number by id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated | Owner
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
{

}
 */

/** @var Route $router */
$router->delete('ngo/resources/phone/{id}', [
    'as' => 'api_ngo_delete_phone_number',
    'uses'  => 'Controller@deletePhoneNumber',
    'middleware' => [
      'auth:api',
    ],
]);
