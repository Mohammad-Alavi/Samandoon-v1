<?php
/**
 * @apiGroup           Storage
 * @apiName            downloadFile
 *
 * @api                {GET} /v1/storage/download/{folder}/{file_name} Download File
 * @apiDescription     Download a file from server's public folder
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
 */


$router->get('storage/download/{user_id}/{file_name}', [
    'as' => 'api_storage_download_file',
    'uses'  => 'Controller@downloadFile',
]);