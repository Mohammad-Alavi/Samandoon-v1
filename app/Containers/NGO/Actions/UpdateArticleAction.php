<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Models\Article;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateArticleAction extends Action
{
    public function run(Request $request)
    {
        // throw exception if article is not found
        $article = Article::find($request->id);
        throw_unless(count($article) > 0 ? true : false, new NotFoundException('Article not found.'));

        $data = $request->sanitizeInput([
            'title',
            'text',
            'article_image'
        ]);

        $article = Apiato::call('NGO@UpdateArticleTask', [$request->id, $data]);

        return $article;
    }
}
