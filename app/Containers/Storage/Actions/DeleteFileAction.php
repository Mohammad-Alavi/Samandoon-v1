<?php

namespace App\Containers\Storage\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteFileAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Storage@DeleteFileTask', [$request]);
    }
}
