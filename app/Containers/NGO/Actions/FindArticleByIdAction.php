<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindArticleByIdAction extends Action
{
    public function run(Request $request)
    {
        $article = Apiato::call('NGO@FindArticleByIdTask', [$request->id]);

        return $article;
    }
}
