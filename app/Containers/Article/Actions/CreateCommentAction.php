<?php

namespace App\Containers\Article\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class CreateCommentAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $user = Apiato::call('Authentication@GetAuthenticatedUserTask');
        $article = Apiato::call('Article@FindArticleByIdTask', [$dataTransporter->id]);
        return Apiato::call('Article@CreateCommentTask', [$user, $article, $dataTransporter->body, $dataTransporter->parent_id]);
    }
}
