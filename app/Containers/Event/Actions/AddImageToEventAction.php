<?php

namespace App\Containers\Event\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class AddImageToEventAction extends Action
{
    public function run(Request $request)
    {
         $image = Apiato::call('Event@AddImageToEventTask', [$request]);
         return $image;
    }
}
