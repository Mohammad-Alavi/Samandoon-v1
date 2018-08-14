<?php

namespace App\Containers\User\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Containers\User\Models\User;
use App\Containers\User\Notifications\FollowedNotification;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class SubscribeTask extends Task
{
    public function run(User $user, Ngo $target)
    {
        try {
            DB::beginTransaction();
            $user->subscribe($target->id, Ngo::class);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new UpdateResourceFailedException('Failed to subscribe to the specified resource');
        } finally {
            DB::commit();
            $target->user->notifyNow(new FollowedNotification($user), ['database', 'fcm']);
            return new JsonResponse([
                'followers_count' => $target->subscribers()->count(),
                'is_following' => $user->hasSubscribed($target->id, Ngo::class)
            ], 200);
        }
    }
}
