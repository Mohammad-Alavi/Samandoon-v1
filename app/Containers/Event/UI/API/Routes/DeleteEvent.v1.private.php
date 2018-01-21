<?php

/**
 * @apiGroup           Event
 * @apiName            DeleteEvent
 *
 * @api                {DELETE} /v1/ngo/event/{id} Delete Event
 * @apiDescription     Delete an Event
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User / Owner
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
{

}
 */

/** @var Route $router */
$router->delete('ngo/event/{id}', [
    'as' => 'api_ngo_delete_event',
    'uses'  => 'Controller@deleteEvent',
    'middleware' => [
      'auth:api',
    ],
]);
