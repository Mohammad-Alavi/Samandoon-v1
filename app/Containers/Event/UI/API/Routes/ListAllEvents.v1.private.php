<?php

/**
 * @apiGroup           Event
 * @apiName            ListAllEvents
 *
 * @api                {get}  /v1/event List Events
 * @apiDescription     Lists all Events (if no query parameter is given)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 * @apiUse             EventSuccessSingleResponse
*/

$router->get('/event', [
    'uses'  => 'Controller@listAllEvents',
    'middleware' => [
      'auth:api',
    ],
]);
