<?php

namespace App\Containers\User\Tasks;

use App\Containers\Article\Models\Article;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use App\Ship\Parents\Tasks\Task;

class GetLikesTask extends Task
{
    public function run(User $user, Model $target)
    {
        switch (class_basename($target)) {
            case 'Article':
                return $user->subscriptions(Article::class)->get();
                break;
        }
    }
}
