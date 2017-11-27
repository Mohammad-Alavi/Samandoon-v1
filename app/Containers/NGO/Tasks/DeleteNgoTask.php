<?php

namespace App\Containers\NGO\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class DeleteNgoTask extends Task
{
    public function run($ngo)
    {
        // delete all events associated with this ngo
        if($ngo->events){
            foreach($ngo->events as $event) {
                Apiato::call('Event@DeleteEventTask', [$event]);
            }
        }

        Storage::disk('public')->delete($ngo->logo_photo);
        Storage::disk('public')->delete($ngo->banner_photo);

        // revoke user's permission to manage events
        $ngo->user->revokePermissionTo('manage-event');

        // remove ngo_id from user table
        $user = User::find($ngo->user->id);
        $user->ngo_id = null;
        $user->save();

        return App::make(NgoRepository::class)->delete($ngo->id);
    }
}
