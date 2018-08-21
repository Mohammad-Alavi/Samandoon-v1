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
 * @apiExample         {url} Example usage:
 * api.samandoon.ngo/v1/search/ngo?q=انجمن&area_of_activity=بین المللی&subjects=[5,2]&city=آبادان&province=خوزستان
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
