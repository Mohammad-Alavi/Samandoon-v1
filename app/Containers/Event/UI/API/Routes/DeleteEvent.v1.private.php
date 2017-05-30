<?php

/**
 * @apiGroup           Event
 * @apiName            
 *
 * @api                {}  Endpoint title here..
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
  // Response here...
}
 */

$router->post('', [
    'uses'  => 'Controller@',
    'middleware' => [
      'auth:api',
    ],
]);
