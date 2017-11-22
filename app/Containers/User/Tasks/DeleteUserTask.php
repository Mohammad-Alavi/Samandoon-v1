<?php

namespace App\Containers\User\Tasks;

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
        if($_user->ngo){
            if($_user->ngo->events){
                foreach($_user->ngo->events as $event) {
                    $event->delete();
                }
            }
            $_user->ngo->delete();
        }
        return $_user->forceDelete();
    }
}
