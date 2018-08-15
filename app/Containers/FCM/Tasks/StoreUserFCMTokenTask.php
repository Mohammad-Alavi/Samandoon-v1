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
                $FCMTokenData = UserFCMToken::firstOrCreate([
                    'user_id' => $userId,
                    'apns_id' => $data['token']
                ]);
            } else {
                $FCMTokenData = UserFCMToken::firstOrCreate([
                    'user_id' => $userId,
                    'android_fcm_token' => $data['token']
                ]);
            }
            return $FCMTokenData;
        } catch (Exception $exception) {
            throw new CreateResourceFailedException('Failed to store new Token with error: ' . $exception->getMessage());
        }
    }
}