<?php

namespace App\Containers\Article\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class DeleteArticleAction extends Action
{
    public function run(DataTransporter $request)
    {
        Apiato::call('Article@FindArticleByIdTask', [$request->id]);
        return Apiato::call('Article@DeleteArticleTask', [$request]);
    }
}
