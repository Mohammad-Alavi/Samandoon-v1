<?php

/**
 * @apiGroup           Event
 * @apiName            GetEvent
 *
 * @api                {get}  /v1/event/{id} Get Event
 * @apiDescription     Get an event by ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             EventSuccessSingleResponse
 */

$router->get('/event/{id}', [
    'uses'  => 'Controller@getEvent',
]);
