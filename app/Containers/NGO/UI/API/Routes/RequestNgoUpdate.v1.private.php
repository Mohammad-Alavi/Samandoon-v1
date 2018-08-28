<?php

/**
 * @apiGroup           NGO
 * @apiName            requestNgoUpdate
 *
 * @api                {PUT} /v1/ngo/update/{ngo_id} Request Ngo Update
 * @apiDescription     Update NGO data from government server
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated | Owner
 *
 * @apiUse             NGOSuccessSingleResponse
 */

/** @var Route $router */
$router->put('ngo/update/{id}', [
    'as' => 'api_ngo_request_ngo_update',
    'uses'  => 'Controller@requestNgoUpdate',
    'middleware' => [
      'auth:api',
    ],
]);
