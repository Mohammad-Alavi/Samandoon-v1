<?php

namespace App\Containers\Storage\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

class DownloadThumbImageAction extends Action
{
    public function run(Request $request)
    {
        $file = Apiato::call('Storage@DownloadThumbImageTask', [$request]);
        return $file;
    }
}
