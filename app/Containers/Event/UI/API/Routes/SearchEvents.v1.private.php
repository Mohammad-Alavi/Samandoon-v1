<?php

/**
 * @apiGroup           Event
 * @apiName            searchEvent
 *
 * @api                {GET} /v1/search/ngo/event?q= Search Event
 * @apiDescription     Search the value of q parameter in events
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             EventSuccessSingleResponse
*/

/** @var Route $router */
$router->get('search/ngo/event', [
    'as' => 'api_event_search_events',
    'uses'  => 'Controller@searchEvents',
//    'middleware' => [
//      'auth:api',
//    ],
]);
