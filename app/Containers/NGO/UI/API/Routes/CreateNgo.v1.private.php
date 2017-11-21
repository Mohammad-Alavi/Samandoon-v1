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
 * @apiParam           {String}  subject (required) required|max:255
 * @apiParam           {String}  area_of_activity (required) required|max:255
 * @apiParam           {text}  address (optional)
 * @apiParam           {image}  logo_photo (optional)
 * @apiParam           {image}  banner_photo (optional)
 * @apiParam           {date}  registration_date (optional) date_format:YmdHiT
 * @apiParam           {date}  license_date (optional) date_format:YmdHiT
 * @apiParam           {integer}  registration_number (optional) unique:ngos,registration_number
 * @apiParam           {integer}  national_number (optional) unique:ngos,national_number
 * @apiParam           {integer}  license_number (optional) unique:ngos,license_number
 *
 * @apiUse             NGOSuccessSingleResponse
 */

$router->post('ngo', [
    'uses'  => 'Controller@createNgo',
    'middleware' => [
      'auth:api',
    ],
]);
