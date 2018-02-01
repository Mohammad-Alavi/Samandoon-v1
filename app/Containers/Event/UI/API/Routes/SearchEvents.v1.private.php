<?php

/**
 * @apiGroup           Event
 * @apiName            searchEvent
 *
 * @api                {GET} /v1/ngo/event/search/{keyword} Search Event
 * @apiDescription     Search the keyword in events
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('ngo/event/search/{keyword}', [
    'as' => 'api_event_search_events',
    'uses'  => 'Controller@searchEvents',
//    'middleware' => [
//      'auth:api',
//    ],
]);
