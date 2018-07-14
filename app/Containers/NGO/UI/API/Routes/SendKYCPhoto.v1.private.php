<?php

/**
 * @apiGroup           NGO
 * @apiName            sendKYCPhoto
 *
 * @api                {POST} /v1/ngo/kyc/photo Send KYC Photo
 * @apiDescription     Send a KYC Photo to be added to the given NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {image}  image
 * @apiParam           {string="national_card_side_one", "national_card_side_two", "identity_paper", "ngo_registration_doc"}  label
 *
 * @apiUse             KYCSuccessSingleResponse
 */

$router->post('ngo/kyc/photo', [
    'as' => 'api_ngo_send_k_y_c_photo',
    'uses'  => 'Controller@sendKYCPhoto',
    'middleware' => [
      'auth:api',
    ],
]);
