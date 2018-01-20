<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateArticleAction extends Action
{
    public function run(Request $request)
    {
        $request->request->add(['ngo_id' => Apiato::call('Authentication@GetAuthenticatedUserTask')->ngo->id]);
        $data = $request->sanitizeInput([
            'title',
            'text',
            'image',
            'ngo_id'
        ]);

        $article = Apiato::call('NGO@CreateArticleTask', [$data]);

        return $article;
    }
}
