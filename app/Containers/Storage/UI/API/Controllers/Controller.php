<?php

namespace App\Containers\Storage\UI\API\Controllers;

use App\Containers\Storage\UI\API\Requests\DownloadFileRequest;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    public function downloadFile(DownloadFileRequest $request){
        $file = $this->call('Storage@DownloadFileAction', [$request]);
        return response()->download($file);
    }

}
