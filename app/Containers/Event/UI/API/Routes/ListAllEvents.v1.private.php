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
 * @apiExample         {url} Example usage:
 * api.samandoon.ngo/v1/ngo/event?filter=title;created_at&orderBy=title&sortedBy=asc&field=title&value=v&ngo_id=3mjzyg5dp5a0vwp6
 * @apiUse             EventSuccessSingleResponse
*/

$router->get('/ngo/event', [
    'uses'  => 'Controller@listAllEvents',
]);
