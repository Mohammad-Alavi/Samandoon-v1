<?php

namespace App\Containers\User\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

class GetArticlesFromFeedAction extends Action
{
    public function run($articleIds)
    {
         return Apiato::call('User@GetArticlesFromFeedTask', [$articleIds]);
    }
}
