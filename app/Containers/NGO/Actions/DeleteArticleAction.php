<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteArticleAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('NGO@DeleteArticleTask', [$request->id]);
    }
}
