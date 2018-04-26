<?php

namespace App\Containers\User\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetSubscribersAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $AuthenticatedUser = Apiato::call('Authentication@GetAuthenticatedUserTask');
        throw_if(empty($AuthenticatedUser->ngo->id), NotFoundException::class, 'User don\'t have a NGO');
        $subscribers = Apiato::call('User@GetSubscribersTask', [$AuthenticatedUser->ngo, $dataTransporter->limit]);
        return $subscribers;
    }
}
