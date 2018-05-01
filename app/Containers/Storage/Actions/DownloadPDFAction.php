<?php

namespace App\Containers\Storage\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class DownloadPDFAction extends Action
{
    public function run(Request $request)
    {
        $file = Apiato::call('Storage@DownloadPDFTask', [$request]);
        return $file;
    }
}
