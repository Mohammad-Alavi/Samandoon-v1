<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Parents\Tasks\Task;

class DownloadFileTask extends Task
{
    public function run($request)
    {
        $file =  'storage/' . $request->id . '/' . $request->resource_name;
//        switch ($request->model_type) {
//            case 'ngo':
//            $media = Ngo::find($request->id)->getMedia('');
//        }
        return $file;
    }
}
