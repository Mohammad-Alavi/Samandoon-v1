<?php

/**
 * @apiGroup           Admin
 * @apiName            kycPhotoAdminVerification
 *
 * @api                {PUT} /v1/ngo/kyc/photo/{photo_id} KYC: Photo Verification
 * @apiDescription     KYC Photo Verification by Admin
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated | Admin
 *
 * @apiParam           {string="invalid", "verified", "sent"}  judgment
 * @apiUse             KYCSuccessSingleResponse
 */
$router->put('ngo/kyc/photo/{photo_id}', [
    'as' => 'api_ngo_kyc_photo_admin_verification',
    'uses'  => 'Controller@kycPhotoAdminVerification',
    'middleware' => [
      'auth:api',
    ],
]);
