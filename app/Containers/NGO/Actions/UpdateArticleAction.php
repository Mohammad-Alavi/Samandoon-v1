<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateArticleAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'title',
            'text'
        ]);

        $article = Apiato::call('NGO@UpdateArticleTask', [$request->id, $data]);

        return $article;
    }
}
