<?php

/**
 * @apiGroup           Event
 * @apiName            searchEvents
 *
 * @api                {GET} /v1/search/ngo/event?q= Search Events
 * @apiDescription     Search the value of q parameter in events
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiExample         {url} Example usage:
 * api.samandoon.ngo/v1/search/ngo/event?q=تست
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
