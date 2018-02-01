<?php

namespace App\Containers\User\Tasks;

use Apiato\Core\Abstracts\Models\Model;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Http\JsonResponse;

class UnsubscribeTask extends Task
{
    public function run(User $user, Model $target)
    {
        try {
            $user->unsubscribe($target);
            return new JsonResponse('User (' . $user->getHashedKey() . ') unsubscribed from resource (' . $target->getHashedKey() . ').', 200);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Failed to unsubscribe from specified resource.');
        }
    }
}
