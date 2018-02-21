<?php

namespace App\Containers\User\Tasks;

use Apiato\Core\Abstracts\Models\Model;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Http\JsonResponse;

class UnlikeTask extends Task
{
    public function run(User $user, Model $target)
    {
        try {
            $user->unlike($target);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Failed to like the specified resource.');
        }

        return new JsonResponse(class_basename($user) . ' (' . $user->getHashedKey() . ') unliked ' . class_basename($target) . ' (' . $target->getHashedKey() . ').', 200);
    }
}
