<?php

/**
 * @apiGroup           Storage
 * @apiName            downloadFile
 *
 * @api                {GET} /v1/storage/:folder/:file_name Endpoint title here..
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

$router->get('storage/{folder}/{file_name}', [
    'as' => 'api_storage_download_file',
    'uses'  => 'Controller@downloadFile',
]);
