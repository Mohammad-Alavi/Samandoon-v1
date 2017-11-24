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
 * @apiParam           {text}  description (optional)
 * @apiParam           {String}  area_of_activity (optional) max:255
 * @apiParam           {text}  address (optional) (optional) max:255
 * @apiParam           {String}  zip_code (optional) (optional) max:255
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
