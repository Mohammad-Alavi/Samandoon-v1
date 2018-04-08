<?php

namespace App\Containers\Article\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Article\Models\Article;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateArticleAction extends Action
{
    public function run(Request $request): Article
    {
        Apiato::call('Article@FindArticleByIdTask', [$request->id]);

        $sanitizedData = $request->sanitizeInput([
            'text',
            'article_image'
        ]);

        return Apiato::call('Article@UpdateArticleTask', [$request->id, $sanitizedData]);
    }
}
