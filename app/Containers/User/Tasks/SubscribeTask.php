<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Models\Model;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Http\JsonResponse;

class SubscribeTask extends Task
{
    public function run(User $user, Model $target)
    {
        try {
            $user->subscribe($target);
            return new JsonResponse('User (' . $user->getHashedKey() . ') is now subscribed to resource (' . $target->getHashedKey() . ').', 200);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException('Failed to subscribe to the specified resource.');
        }
    }
}
