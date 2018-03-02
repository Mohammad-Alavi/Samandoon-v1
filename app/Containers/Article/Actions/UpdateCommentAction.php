<?php

namespace App\Containers\Article\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UpdateCommentAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $article = Apiato::call('Article@FindArticleByIdTask', [$dataTransporter->id]);
        $comment = $article->comments()->find($dataTransporter->comment_id);
        throw_if(empty($comment), NotFoundException::class, 'Comment not found');
        throw_if(\Auth::user()->id !== $comment->creator_id, AccessDeniedHttpException::class, 'You don\'t have access to this resource');
        return Apiato::call('Article@UpdateCommentTask', [$article, $dataTransporter->comment_id, $dataTransporter->body]);
    }
}
