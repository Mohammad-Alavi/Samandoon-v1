<?php

/**
 * @apiGroup           NGO
 * @apiName            listAllNGOs
 *
 * @api                {GET} /v1/ngo List all NGOs
 * @apiDescription     Lists all NGOs (if no query parameter is given)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
*/

$router->get('ngo', [
    'as' => 'api_ngo_list_all_ngos',
    'uses'  => 'Controller@listAllNgos',
]);
