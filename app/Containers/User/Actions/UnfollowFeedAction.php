<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Transporters\DataTransporter;
use Vinkla\Hashids\Facades\Hashids;

class UnfollowFeedAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        try {
            $result = Apiato::call('User@UnfollowFeedTask', [$dataTransporter]);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
        $user = Apiato::call('User@FindUserByIdTask', [Hashids::decode($dataTransporter->id)[0]]);
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [Hashids::decode($dataTransporter->target_id)[0]]);
        Apiato::call('User@UnsubscribeTask', [$user, $ngo]);
        return $result;
    }
}
