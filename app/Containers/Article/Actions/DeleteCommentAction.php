<?php

namespace App\Containers\Article\Actions;

use App\Containers\Article\Models\Article;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class DeleteCommentAction extends Action
{
    public function run(DataTransporter $dataTransporter)
    {
        $article = Apiato::call('Article@FindArticleByIdTask', [$dataTransporter->id]);
        $comment = $article->comments()->find($dataTransporter->comment_id);
        throw_if(empty($comment), NotFoundException::class, 'Comment not found');

        if ($comment->commentable_type === 'App\Containers\Article\Models\Article') {
            $article = Article::find($comment->commentable_id);
        }

        throw_if(
        // True if user in not the creator of the comment
            \Auth::user()->id !== $comment->creator_id &&
            // True if user is not the article owner
            \Auth::user()->ngo()->id !== $article->ngo->id, AccessDeniedHttpException::class, 'You don\'t have access to this resource');
        return Apiato::call('Article@DeleteCommentTask', [$article, $dataTransporter->comment_id]);
    }
}