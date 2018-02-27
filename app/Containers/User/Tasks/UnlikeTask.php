<?php

namespace App\Containers\User\Tasks;

use Apiato\Core\Abstracts\Models\Model;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;

class UnlikeTask extends Task
{
    public function run(User $user, Model $target)
    {
        try {
            $user->unlike($target);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Failed to like the specified resource.');
        }

        return ['user' => $user, 'target' => $target, 'is_liked' => false];
    }
}
