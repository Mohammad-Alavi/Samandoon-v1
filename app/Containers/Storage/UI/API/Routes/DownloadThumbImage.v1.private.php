<?php
/**
 * @apiGroup           Storage
 * @apiName            downloadThumbImage
 *
 * @api                {GET} /v1/storage/{id}/conversions/{resource_name} Download Thumb Image
 * @apiDescription     Returns a Thumb Image from server's public folder
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 */

/** @var Route $router */
$router->get('storage/{id}/conversions/{resource_name}', [
    'as' => 'api_storage_download_thumb_image',
    'uses'  => 'Controller@downloadThumbImage',
]);
