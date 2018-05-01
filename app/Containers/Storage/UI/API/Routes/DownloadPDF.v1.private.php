<?php

/**
 * @apiGroup           Storage
 * @apiName            downloadPDF
 *
 * @api                {GET} /v1/storage/generate/pdf Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('generate/pdf', [
    'as' => 'api_storage_download_p_d_f',
    'uses'  => 'Controller@downloadPDF',
//    'middleware' => [
//      'auth:api',
//    ],
]);
