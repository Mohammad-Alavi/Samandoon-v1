<?php

namespace App\Containers\Article\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetArticleAction extends Action
{
    public function run(Request $data)
    {
        return $this->call('Article@FindArticleByIdTask', [$data->id]);
    }
}
