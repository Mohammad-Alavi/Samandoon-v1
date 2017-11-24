<?php

/**
 * @apiGroup           NGO
 * @apiName            CreateNGO
 *
 * @api                {POST} /v1/ngo Create NGO
 * @apiDescription     Create a NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  name (required) required|max:255|unique:ngos,name
 * @apiParam           {text}  description (optional)
 * @apiParam           {String}  area_of_activity (optional) max:255
 * @apiParam           {text}  address (optional) max:255
 * @apiParam           {String}  zip_code (optional)
 * @apiParam           {image}  logo_photo (optional)
 * @apiParam           {image}  banner_photo (optional)
 *
 * @apiUse             NGOSuccessSingleResponse
 */

$router->post('ngo', [
    'uses'  => 'Controller@createNgo',
    'middleware' => [
      'auth:api',
    ],
]);
