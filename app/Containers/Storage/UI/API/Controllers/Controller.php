<?php

namespace App\Containers\Storage\UI\API\Controllers;

use App\Containers\Storage\UI\API\Requests\DeleteFileRequest;
use App\Containers\Storage\UI\API\Requests\DownloadFileRequest;
use App\Containers\Storage\UI\API\Requests\DownloadThumbImageRequest;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    public function downloadFile(DownloadFileRequest $request){
        $file = $this->call('Storage@DownloadFileAction', [$request]);
        return response()->download($file);
    }

    public function downloadThumbImage(DownloadThumbImageRequest $request){
        $file = $this->call('Storage@DownloadThumbImageAction', [$request]);
        return response()->download($file);
    }

    public function deleteFile(deleteFileRequest $request){
        $this->call('Storage@DeleteFileAction', [$request]);
        return $this->noContent();
    }
}
