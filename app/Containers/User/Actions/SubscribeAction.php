<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Validation\UnauthorizedException;

class SubscribeAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $AuthenticatedUser = Apiato::call('Authentication@GetAuthenticatedUserTask');
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$dataTransporter->id]);

        // throw if user is trying to subscribe to his own ngo
        throw_if($ngo->id == $AuthenticatedUser->ngo->id, UnauthorizedException::class, 'User cannot follow is own NGO');

        $result = Apiato::call('User@SubscribeTask', [$AuthenticatedUser, $ngo]);
        return $result;
    }
}
