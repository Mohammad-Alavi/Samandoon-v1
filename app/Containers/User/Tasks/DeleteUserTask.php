<?php

namespace App\Containers\User\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

/**
 * Class DeleteUserTask
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class DeleteUserTask extends Task
{
    public function run($user)
    {
//        return App::make(UserRepository::class)->delete($user->id);
        $_user = App::make(UserRepository::class)->find($user->id);

        // remove user avatar from server
        if (!empty($user->avatar)) {
            Storage::disk('public')->delete($user->avatar);
        }
        if ($_user->ngo) {
            // Delete user ngo before deleting user
            Apiato::call('NGO@DeleteNgoTask', [$_user->ngo]);
        }
        return $_user->forceDelete();
    }
}
