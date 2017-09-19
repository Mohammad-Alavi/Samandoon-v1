<?php

/**
 * @apiGroup           NGO
 * @apiName            DeleteNGO
 *
 * @api                {DELETE} /v1/ngo/{id} Delete NGO
 * @apiDescription     Delete a NGO by ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      Owner | Admin
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "message": "NGO (oj64bp5zjl8ywzn0) Deleted Successfully."
}
 */

$router->delete('ngo/{id}', [
    'uses'  => 'Controller@deleteNgo',
    'middleware' => [
      'auth:api',
    ],
]);
