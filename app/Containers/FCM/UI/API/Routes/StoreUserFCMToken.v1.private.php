<?php

/**
 * @apiGroup           FCM
 * @apiName            StoreUserFCMToken
 *
 * @api                {POST} /v1/fcm/token/store Store FCM token
 * @apiDescription     Store user's android/ios FCM token on the server
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String=android,ios} device_type
 * @apiParam           {String} token
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "user_id": "3mjzyg5dp5a0vwp6",
    "android_fcm_token": "123456",
    "apns_id": null
}
*/
$router->post('fcm/token/store', [
    'as' => 'api_fcm_store_user_f_c_m_token',
    'uses'  => 'Controller@storeUserFCMToken',
    'middleware' => [
      'auth:api',
    ],
]);
