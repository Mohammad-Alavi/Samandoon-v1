<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\Event\Models\Event;
use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class DeleteNgoTask extends Task
{
    public function run($ngo)
    {
        // revoke user's permission to manage events
        $ngo->user->revokePermissionTo('manage-event');

        // delete all events associated to this ngo
        if($ngo->events){
            foreach($ngo->events as $event) {
                $event->delete();
            }
        }

        return App::make(NgoRepository::class)->delete($ngo->id);
    }
}
