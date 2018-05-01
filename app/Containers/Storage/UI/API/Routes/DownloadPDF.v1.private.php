<?php

/**
 * @apiGroup           Storage
 * @apiName            downloadPDF
 *
 * @api                {GET} /v1/generate/pdf Generate Timeline PDF
 * @apiDescription     Generate Timeline PDF and return as file to download
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 */

/** @var Route $router */
$router->get('generate/pdf', [
    'as' => 'api_storage_download_p_d_f',
    'uses'  => 'Controller@downloadPDF',
//    'middleware' => [
//      'auth:api',
//    ],
]);
