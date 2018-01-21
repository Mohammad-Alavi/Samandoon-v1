<?php

/**
 * @apiGroup           Event
 * @apiName            GetEvent
 *
 * @api                {get}  /v1/ngo/event/{id} Get Event
 * @apiDescription     Get an event by ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             EventSuccessSingleResponse
 */

$router->get('ngo/event/{id}', [
    'uses'  => 'Controller@getEvent',
]);
