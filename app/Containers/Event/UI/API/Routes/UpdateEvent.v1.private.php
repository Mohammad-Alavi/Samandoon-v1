<?php

/**
 * @apiGroup           Event
 * @apiName            UpdateEvent
 *
 * @api                {put}  /v1/event/{id} Update Event
 * @apiDescription     Update a given event
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User / Owner
 *
 * @apiParam           {string}  title (optional)
 * @apiParam           {text}  description (optional)
 * @apiParam           {dateTime}  event_date (optional) date_format:YmdHiT
 * @apiParam           {image}  event_photo (optional)
 * @apiParam           {text} location (optional)

 * @apiUse             EventSuccessSingleResponse
 */

$router->put('/event/{id}', [
    'uses'  => 'Controller@updateEvent',
    'middleware' => [
      'auth:api',
    ],
]);
