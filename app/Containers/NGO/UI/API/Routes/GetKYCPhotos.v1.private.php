<?php

/**
 * @apiGroup           NGO
 * @apiName            getKYCPhotos
 *
 * @api                {GET} /v1/ngo/{ngo_id}/kyc/photo KYC: Get All Photos
 * @apiDescription     Get all KYC photos for the given NGO.
 * The "status" values are as follow:
 * "sent" = photo has been saved to the server.
 * "verified" = photo has been verified by admins.
 * "invalid" = photo is checked by admins and has NOT been verified.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiUse             KYCSuccessSingleResponse
 */
$router->get('ngo/{ngo_id}/kyc/photo', [
    'as' => 'api_ngo_get_k_y_c_photos',
    'uses'  => 'Controller@getKYCPhotos',
    'middleware' => [
      'auth:api',
    ],
]);
