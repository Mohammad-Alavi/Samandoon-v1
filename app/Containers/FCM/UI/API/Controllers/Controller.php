<?php

namespace App\Containers\FCM\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\FCM\UI\API\Requests\FCMTokenRequest;
use App\Containers\FCM\UI\API\Transformers\UserFCMTokenTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Transporters\DataTransporter;

class Controller extends ApiController
{
    public function storeUserFCMToken(FCMTokenRequest $request)
    {
        $fcm = Apiato::call('FCM@StoreUserFCMTokenAction', [new DataTransporter($request)]);
        $fcmTransformer = new UserFCMTokenTransformer();
        return $fcmTransformer->transform($fcm);
    }
}
