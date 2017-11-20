<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Parents\Tasks\Task;

class DownloadFileTask extends Task
{
    public function run($folder, $file_name)
    {
        $path = public_path($folder.'/'.$file_name);
        return $path;
    }
}
