<?php

/**
 * @apiGroup           NGO
 * @apiName            getNgoByPublicName
 *
 * @api                {GET} /v1/ngo/name/{public_name} Get NGO by Public Name
 * @apiDescription     Get the NGO by it's public name
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
 */

/** @var Route $router */
$router->get('ngo/name/{public_name}', [
    'as' => 'api_ngo_get_ngo_by_public_name',
    'uses'  => 'Controller@getNgoByPublicName',
//    'middleware' => [
//      'auth:api',
//    ],
]);
