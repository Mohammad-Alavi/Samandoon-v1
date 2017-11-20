<?php
/**
 * @apiGroup           Storage
 * @apiName            downloadFile
 *
 * @api                {GET} /v1/{folder}/{file_name} Download File
 * @apiDescription     Download a file from server's public folder
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             UserSuccessSingleResponse
 */


$router->get('{folder}/{file_name}', [
    'as' => 'api_storage_download_file',
    'uses'  => 'Controller@downloadFile',
]);
