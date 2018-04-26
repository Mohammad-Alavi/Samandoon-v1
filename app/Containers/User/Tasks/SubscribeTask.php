<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class SubscribeTask extends Task
{
    public function run(User $user, int $target)
    {
        try {
            DB::beginTransaction();
            $user->subscribe($target);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new UpdateResourceFailedException('Failed to subscribe to the specified resource');
        } finally {
            DB::commit();
            return new JsonResponse('Subscription successful', 200);
        }
    }
}
