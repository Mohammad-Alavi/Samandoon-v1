<?php

/**
 * @apiGroup           NGO
 * @apiName            getKYCPhotos
 *
 * @api                {GET} /v1/ngo/{ngo_id}/kyc/photo Get All KYC Photos
 * @apiDescription     Get all KYC photos for the given NGO
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
