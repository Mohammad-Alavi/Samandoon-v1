<?php

/**
 * @apiGroup           Event
 * @apiName            CreateEvent
 *
 * @api                {post} /v1/ngo/event Create Event
 * @apiDescription     Create an event
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User / Owner
 *
 * @apiParam           {string} title max:255
 * @apiParam           {image} event_image
 * @apiParam           {dateTime} event_date date_format:YmdHiT
 * @apiParam           {string} city
 * @apiParam           {string} province
 * @apiParam           {string} address
 * @apiParam           {numeric} [lat] latitude
 * @apiParam           {numeric} [long] longitude
 *
 * @apiUse             EventSuccessSingleResponse
*/


$router->post('ngo/event', [
    'uses'  => 'Controller@createEvent',
    'middleware' => [
      'auth:api',
    ],
]);
