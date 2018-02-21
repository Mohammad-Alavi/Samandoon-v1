<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetLikesAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $user = Apiato::call('User@FindUserByIdTask', [$dataTransporter->id]);
        return Apiato::call('User@GetLikesTask', [$user, $dataTransporter->type]);
    }
}
