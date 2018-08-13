<?php

namespace App\Containers\FCM\UI\API\Transformers;

use Vinkla\Hashids\Facades\Hashids;

class UserFCMTokenTransformer
{
    public function transform($entity)
    {
        $response = [
            'object' => 'UserFCMToken',
            'id' => Hashids::encode($entity->id),
            'user_id' => Hashids::encode($entity->user_id),
            'android_fcm_token' => $entity->android_fcm_token[0],
            'apns_id' => $entity->apns_id[0],
        ];

        return $response;
    }
}
