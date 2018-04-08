<?php

namespace App\Containers\Article\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetArticleAction extends Action
{
    public function run(Request $data)
    {
        $article = Apiato::call('Article@FindArticleByIdTask', [$data->id]);
        return $article;
    }
}
