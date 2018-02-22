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
 * @apiParam           {text}  [description]
 * @apiParam           {String}  [area_of_activity] max:255
 * @apiParam           {String}  [city]
 * @apiParam           {String}  [province]
 * @apiParam           {text}  [address]
 * @apiParam           {String}  [zip_code] max:255
 * @apiParam           {image}  [ngo_logo]
 * @apiParam           {image}  [ngo_banner]
 *
 * @apiUse             NGOSuccessSingleResponse
*/

$router->put('ngo/{id}', [
    'uses'  => 'Controller@updateNgo',
    'middleware' => [
      'auth:api',
    ],
]);
