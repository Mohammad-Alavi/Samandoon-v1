<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateArticleAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('Authentication@GetAuthenticatedUserTask')->ngo;
        if (!$ngo) {
            throw new NotFoundException('User don\'t have a NGO.');
        }

        $request->request->add(['ngo_id' => $ngo->id]);

        $data = $request->sanitizeInput([
            'title',
            'text',
            'article_image',
            'ngo_id'
        ]);

        $article = Apiato::call('NGO@CreateArticleTask', [$data]);

        return $article;
    }
}
