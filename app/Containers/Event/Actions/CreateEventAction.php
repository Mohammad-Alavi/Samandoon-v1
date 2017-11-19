<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateEventAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('Authentication@GetAuthenticatedUserTask')->ngo;
        $event = Apiato::call('Event@CreateEventTask', [$request, $ngo]);

        return $event;
    }
}
