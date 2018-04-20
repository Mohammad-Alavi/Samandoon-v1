<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Parents\Tasks\Task;

class DownloadThumbImageTask extends Task
{
    public function run($request)
    {
        $file =  public_path() . '/storage/' . $request->id . '/conversions/' . $request->resource_name;
        return $file;
    }
}
