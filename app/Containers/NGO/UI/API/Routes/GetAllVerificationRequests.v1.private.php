<?php

/**
 * @apiGroup           Admin
 * @apiName            getAllVerificationRequests
 *
 * @api                {GET} /v1/ngo/kyc/verification/requests KYC: Get All verification requests
 * @apiDescription     Get All verification requests sent by da users
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated | Admin
 *
 * @apiUse             NGOSuccessSingleResponse
 */
$router->get('ngo/kyc/verification/requests', [
    'as' => 'api_ngo_get_all_verification_requests',
    'uses'  => 'Controller@getAllVerificationRequests',
    'middleware' => [
      'auth:api',
    ],
]);
