<?php

/**
 * @apiGroup           Admin
 * @apiName            kycNgoAdminVerification
 *
 * @api                {PUT} /v1/ngo/{ngo_id}/kyc KYC: NGO Verification
 * @apiDescription     KYC NGO Verification by Admin
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authorized | Admin
 *
 * @apiParam           {string="requested", "unverified", "in_progress", "verified"}  judgment
 *
 * @apiUse             NGOSuccessSingleResponse
 */
$router->put('ngo/{ngo_id}/kyc', [
    'as' => 'api_ngo_kyc_ngo_admin_verification',
    'uses'  => 'Controller@kycNgoAdminVerification',
    'middleware' => [
      'auth:api',
    ],
]);
