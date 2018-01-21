<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteEventAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Event@DeleteEventTask', [$request]);
    }
}