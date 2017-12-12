<?php

namespace App\Containers\Storage\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DownloadFileAction extends Action
{
    public function run(Request $request)
    {
        $file = $this->call('Storage@DownloadFileTask', [$request]);
        return $file;
    }
}
