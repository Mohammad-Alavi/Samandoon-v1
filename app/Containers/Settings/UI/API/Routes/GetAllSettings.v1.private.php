<?php

/**
 * @apiGroup           Setting
 * @apiName            getAllSettings
 *
 * @api                {GET} /v1/settings Get All Settings
 * @apiDescription     Get All settings for the application
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "current_android_version_code": 500,
    "current_android_version_name": "25.21.2.657",
    "current_ios_version": 500,
    "in_maintance_mode_message": "برنامه نویسان مشغول کارند!",
    "is_in_maintance_mode": true,
    "is_login_allowed": true,
    "is_new_article_allowed": true,
    "is_new_event_allowed": true,
    "is_ngo_creation_allowed": true,
    "is_payment_allowed": true,
    "is_registration_allowed": true,
    "least_android_version_code": 1000,
    "least_android_version_name": "12.2.14.221",
    "least_ios_version": 1000,
    "update_android_url": "www.google.com",
    "update_ios_url": "www.google.com"
}
*/
$router->get('settings', [
    'as' => 'api_settings_get_all_settings',
    'uses'  => 'Controller@getAllSettings',
    'middleware' => [
      'auth:api',
    ],
]);
