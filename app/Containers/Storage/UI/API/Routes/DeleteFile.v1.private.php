<?php

/**
 * @apiGroup           Storage
 * @apiName            deleteFile
 *
 * @api                {DELETE} /v1/storage/{folder_name}/{resource_name} Delete File
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
    "Media (50762ff31f0d03520cd26dbb54d37443.jpg) deleted."
}
 */

/** @var Route $router */
$router->delete('storage/{id}/{resource_name}', [
    'as' => 'api_storage_delete_file',
    'uses'  => 'Controller@deleteFile',
    'middleware' => [
      'auth:api',
    ],
]);
