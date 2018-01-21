<?php

/**
 * @apiGroup           NGO
 * @apiName            CreateNGO
 *
 * @api                {POST} /v1/ngo Create NGO
 * @apiDescription     Create a NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  national_id (required)
 *
 * @apiUse             NGOSuccessSingleResponse
 */

$router->post('ngo', [
    'uses'  => 'Controller@createNgo',
    'middleware' => [
      'auth:api',
    ],
]);
