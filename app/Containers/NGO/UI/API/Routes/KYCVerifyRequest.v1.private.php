<?php

/**
 * @apiGroup           NGO
 * @apiName            kycVerifyRequest
 *
 * @api                {PUT} /v1/ngo/kyc/verification/verify KYC: Send verification request
 * @apiDescription     Send verification request
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "Photo verification request has been submitted"
}
 */

/** @var Route $router */
$router->put('ngo/kyc/verification/verify', [
    'as' => 'api_ngo_kyc_verify_request',
    'uses'  => 'Controller@kycVerifyRequest',
    'middleware' => [
      'auth:api',
    ],
]);
