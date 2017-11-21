<?php

/**
 * @apiGroup           NGO
 * @apiName            UpdateNGO
 *
 * @api                {PUT} /v1/ngo/{id} Update NGO
 * @apiDescription     Update a given NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Owner | Admin
 *
 * @apiParam           {String}  name (optional) max:255|unique:ngos,name
 * @apiParam           {text}  description (optional)
 * @apiParam           {String}  subject (optional) max:255
 * @apiParam           {String}  area_of_activity (optional) max:255
 * @apiParam           {text}  address (optional)
 * @apiParam           {date}  registration_date (optional) date_format:YmdHiT
 * @apiParam           {date}  license_date (optional) date_format:YmdHiT
 * @apiParam           {integer}  registration_number (optional) unique:ngos,registration_number
 * @apiParam           {integer}  national_number (optional) unique:ngos,national_number
 * @apiParam           {integer}  license_number (optional) unique:ngos,license_number
 * @apiParam           {image}  logo_photo (optional)
 * @apiParam           {image}  banner_photo (optional)
 *
 * @apiUse             NGOSuccessSingleResponse
*/

$router->put('ngo/{id}', [
    'uses'  => 'Controller@updateNgo',
    'middleware' => [
      'auth:api',
    ],
]);
