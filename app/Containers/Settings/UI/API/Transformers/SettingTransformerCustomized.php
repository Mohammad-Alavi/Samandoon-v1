<?php

namespace App\Containers\NGO\UI\API\Transformers;

class SettingTransformerCustomized
{
    public function transform($entity)
    {
        $response = [
            "current_android_version_code" => (int)$entity['current_android_version_code'],
            "current_android_version_name" => (string)$entity['current_android_version_name'],
            "current_ios_version" => (int)$entity['current_ios_version'],
            "in_maintance_mode_message" => (string)$entity['in_maintance_mode_message'],
            "is_in_maintance_mode" => (bool)$entity['is_in_maintance_mode'],
            "is_login_allowed" => (bool)$entity['is_login_allowed'],
            "is_new_article_allowed" => (bool)$entity['is_new_article_allowed'],
            "is_new_event_allowed" => (bool)$entity['is_new_event_allowed'],
            "is_ngo_creation_allowed" => (bool)$entity['is_ngo_creation_allowed'],
            "is_payment_allowed" => (bool)$entity['is_payment_allowed'],
            "is_registration_allowed" => (bool)$entity['is_registration_allowed'],
            "least_android_version_code" => (int)$entity['least_android_version_code'],
            "least_android_version_name" => (string)$entity['least_android_version_name'],
            "least_ios_version" => (int)$entity['least_ios_version'],
            "update_android_url" => (string)$entity['update_android_url'],
            "update_ios_url" => (string)$entity['update_ios_url']
        ];

        return $response;
    }
}
