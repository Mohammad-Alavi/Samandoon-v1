<?php

/**
 * @apiGroup           NGO
 * @apiName            searchNgos
 *
 * @api                {GET} /v1/search/ngo?q= Search NGOs
 * @apiDescription     Search the value of q parameter in NGOs
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
 */

/** @var Route $router */
$router->get('search/ngo', [
    'as' => 'api_ngo_search_ngos',
    'uses'  => 'Controller@searchNgos',
//    'middleware' => [
//      'auth:api',
//    ],
]);
