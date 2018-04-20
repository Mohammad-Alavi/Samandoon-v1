<?php

namespace App\Containers\Article\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetCommentAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $article = Apiato::call('Article@FindArticleByIdTask', [$dataTransporter->id]);

        throw_if(empty($article->id), new NotFoundException('Article not found.'));

        return Apiato::call('Article@GetCommentTask', [$article, $dataTransporter->comment_id]);
    }
}
