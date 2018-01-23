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
 * HTTP/1.1 204 No Content
{

}
 */

$router->delete('ngo/{id}', [
    'uses'  => 'Controller@deleteNgo',
    'middleware' => [
      'auth:api',
    ],
]);
