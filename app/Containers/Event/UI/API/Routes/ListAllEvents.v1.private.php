<?php

/**
 * @apiGroup           Event
 * @apiName            ListAllEvents
 *
 * @api                {get}  /v1/ngo/event List Events
 * @apiDescription     Lists all Events (if no query parameter is given)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 * @apiUse             EventSuccessSingleResponse
*/

$router->get('/ngo/event', [
    'uses'  => 'Controller@listAllEvents',
]);
