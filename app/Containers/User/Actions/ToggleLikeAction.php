<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class ToggleLikeAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $user = Apiato::call('Authentication@GetAuthenticatedUserTask');

        if ($dataTransporter->type == 'event') {
            $target = Apiato::call('Event@FindEventByIdTask', [$dataTransporter->id]);
        } elseif ($dataTransporter->type == 'article') {
            $target = Apiato::call('Article@FindArticleByIdTask', [$dataTransporter->id]);
        }

        return Apiato::call('User@ToggleLikeTask', [$user, $target]);
    }
}
