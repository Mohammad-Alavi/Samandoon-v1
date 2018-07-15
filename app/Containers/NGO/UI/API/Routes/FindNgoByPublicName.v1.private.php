<?php

/**
 * @apiGroup           NGO
 * @apiName            findNgoByPublicName
 *
 * @api                {GET} /v1/ngo/get/{public_name} Find NGO by Public Name
 * @apiDescription     Search a NGO in local DB and return it's data if ngo is found
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
 */
$router->get('ngo/get/{public_name}', [
    'as' => 'api_ngo_find_ngo_by_public_name',
    'uses'  => 'Controller@findNgoByPublicName',
//    'middleware' => [
//      'auth:api',
//    ],
]);
