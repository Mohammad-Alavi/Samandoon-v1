<?php

/**
 * @apiGroup           NGO
 * @apiName            GetNGO
 *
 * @api                {GET} /v1/ngo/{id} Get NGO
 * @apiDescription     Get a NGO by ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
*/

$router->get('ngo/{id}', [
    'uses'  => 'Controller@getNgo',
    'middleware' => [
      'auth:api',
    ],
]);
