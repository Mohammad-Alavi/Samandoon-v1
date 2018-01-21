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
 * @apiParam           {string} title (required) max:255
 * @apiParam           {text} description (optional)
 * @apiParam           {image} event_image (optional)
 * @apiParam           {dateTime} event_date (required) date_format:YmdHiT
 * @apiParam           {text} location (optional)
 *
 * @apiUse             EventSuccessSingleResponse
*/


$router->post('ngo/event', [
    'uses'  => 'Controller@createEvent',
    'middleware' => [
      'auth:api',
    ],
]);
