<?php

namespace App\Containers\Storage\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Tasks\Task;

class DownloadFileTask extends Task
{
    public function run($request)
    {
//        $path =  public_path('storage/'. $request->user_id.'/'. $request->file_name);
        switch ($request->model_type) {
            case 'ngo':
            $media = Ngo::find($request->id)->getMedia('');
        }
        return $media;
    }
}
