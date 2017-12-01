<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Parents\Tasks\Task;

class DownloadFileTask extends Task
{
    public function run($request)
    {
        $path = public_path('storage/'. $request->user_id.'/'. $request->file_name);
        return $path;
    }
}
