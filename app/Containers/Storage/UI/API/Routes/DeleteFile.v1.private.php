<?php

/**
 * @apiGroup           Storage
 * @apiName            deleteFile
 *
 * @api                {DELETE} /v1/storage/delete/{user_id}/{file_name} Delete File
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
$router->delete('storage/delete/{id}/{file_name}', [
    'as' => 'api_storage_delete_file',
    'uses'  => 'Controller@deleteFile',
    'middleware' => [
      'auth:api',
    ],
]);
