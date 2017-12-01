<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\Log;

class DownloadFileTask extends Task
{
    public function run($request)
    {
//        Log::info(substr($request->fullUrl(), 42));
        $path = public_path('storage/'. $request->user_id.'/'. $request->file_name);
        return $path;
    }
}
