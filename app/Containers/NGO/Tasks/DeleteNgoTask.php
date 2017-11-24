<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class DeleteNgoTask extends Task
{
    public function run($ngo)
    {
        // delete all events associated to this ngo
        if($ngo->events){
            foreach($ngo->events as $event) {
                $event->delete();
            }
        }

        Storage::disk('public')->delete($ngo->logo_photo);
        Storage::disk('public')->delete($ngo->banner_photo);

        // revoke user's permission to manage events
        $ngo->user->revokePermissionTo('manage-event');

        return App::make(NgoRepository::class)->delete($ngo->id);
    }
}
