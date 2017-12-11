<?php

/**
 * @apiGroup           NGO
 * @apiName            listAllNGOs
 *
 * @api                {GET} /v1/ngo List NGOs
 * @apiDescription     Lists all NGOs (if no query parameter is given)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
*/

$router->get('ngo', [
    'uses'  => 'Controller@listAllNgos',
]);
