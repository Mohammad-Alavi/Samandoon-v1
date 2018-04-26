<?php

namespace App\Containers\User\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class UnsubscribeTask extends Task
{
    public function run(User $user, int $target)
    {
        try {
            DB::beginTransaction();
            $user->unsubscribe($target, Ngo::class);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new UpdateResourceFailedException('Failed to unsubscribe from the specified resource');
        } finally {
            DB::commit();
            return new JsonResponse([
                'followers_count' => Ngo::find($target)->subscribers()->count(),
                'is_following' => $user->hasSubscribed($target, Ngo::class)
            ], 200);
        }
    }
}
