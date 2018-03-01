<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Auth;

class UnsubscribeAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $user = Auth::user();

        switch ($dataTransporter->resource_name){
            case 'ngo':
                // Target to be Subscribed to by the user
                $target = $this->call('NGO@FindNgoByIdTask',[$dataTransporter->id]);
        }
        return $this->call('User@UnsubscribeTask', [$user, $target]);
    }
}
