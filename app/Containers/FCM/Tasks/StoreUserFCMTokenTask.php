<?php

namespace App\Containers\FCM\Tasks;

use App\Containers\FCM\Models\UserFCMToken;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class StoreUserFCMTokenTask extends Task
{
    protected $userFcmToken;

    public function __construct(UserFcmToken $userFcmToken)
    {
        return $this->userFcmToken = $userFcmToken;
    }

    public function run($data, $userId)
    {
        try {
            if (array_key_exists('device_type', $data) && $data['device_type'] == 'ios') {
                $FCMTokenData = [
                    'user_id' => $userId,
                    'apns_id' => $data['token']
                ];

                // Add the ios device token to dbs
                $FCMTokenData = $this->userFcmToken->create($FCMTokenData);
            } else {
                $FCMTokenData = [
                    'user_id' => $userId,
                    'android_fcm_token' => $data['token']
                ];
                // Add the android device token to dbs
                $FCMTokenData = $this->userFcmToken->create($FCMTokenData);
            }
            return $FCMTokenData;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to store new Token' . $exception->getMessage());
        }
    }
}