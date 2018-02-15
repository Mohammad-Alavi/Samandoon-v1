<?php

namespace App\Containers\Article\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetArticleAction extends Action
{
    public function run(Request $data)
    {
        $article = $this->call('Article@FindArticleByIdTask', [$data->id]);

        throw_if(empty($article->id), new NotFoundException('Article not found.'));

        return $article;
    }
}
