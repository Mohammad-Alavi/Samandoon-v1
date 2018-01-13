<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\Log;

class DownloadFileTask extends Task
{
    public function run($request)
    {
        $file =  public_path() . '/storage/' . $request->id . '/' . $request->resource_name;
        return $file;
    }
}
