<?php

/**
 * @apiGroup           User
 * @apiName            FallowNgo
 *
 * @api                {POST} /v1/user/fallow Fallow NGO
 * @apiDescription     Fallow the specified ngo
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

$router->post('user/fallow', [
    'uses'  => 'Controller@fallowNgo',
    'middleware' => [
      'auth:api',
    ],
]);
