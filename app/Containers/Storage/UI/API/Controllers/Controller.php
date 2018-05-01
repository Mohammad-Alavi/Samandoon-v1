<?php

namespace App\Containers\Storage\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Storage\UI\API\Requests\DeleteFileRequest;
use App\Containers\Storage\UI\API\Requests\DownloadFileRequest;
use App\Containers\Storage\UI\API\Requests\DownloadPDFRequest;
use App\Containers\Storage\UI\API\Requests\DownloadThumbImageRequest;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    public function downloadFile(DownloadFileRequest $request)
    {
        $file = Apiato::call('Storage@DownloadFileAction', [$request]);
        return response()->download($file);
    }

    public function downloadThumbImage(DownloadThumbImageRequest $request)
    {
        $file = Apiato::call('Storage@DownloadThumbImageAction', [$request]);
        return response()->download($file);
    }

    public function deleteFile(deleteFileRequest $request)
    {
        Apiato::call('Storage@DeleteFileAction', [$request]);
        return Apiato::noContent();
    }

    public function downloadPDF(DownloadPDFRequest $request)
    {
        $file = Apiato::call('Storage@DownloadPDFAction', [$request]);
        return $file->download();
    }
}