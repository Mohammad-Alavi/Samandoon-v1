<?php

/**
 * @apiGroup           Event
 * @apiName            DeleteEvent
 *
 * @api                {delete} /v1/event/{id} Delete Event
 * @apiDescription     Delete an Event by ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User / Owner
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "message": "Event (oj64bp5zjl8ywzn0) Deleted Successfully."
}
 */

$router->delete('/event/{id}', [
    'uses'  => 'Controller@deleteEvent',
    'middleware' => [
      'auth:api',
    ],
]);
