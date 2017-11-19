<?php

/**
 * @apiGroup           Event
 * @apiName            CreateEvent
 *
 * @api                {post} /v1/event Create Event
 * @apiDescription     Create an event
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User / Owner
 *
 * @apiParam           {string} title (required)
 * @apiParam           {text} description (optional)
 * @apiParam           {dateTime} event_date (required) required|date_format:YmdHiT
 * @apiParam           {image} event_photo (optional)
 * @apiParam           {text} location (optional)
 *
 * @apiUse             EventSuccessSingleResponse
*/


$router->post('/event', [
    'uses'  => 'Controller@createEvent',
    'middleware' => [
      'auth:api',
    ],
]);
