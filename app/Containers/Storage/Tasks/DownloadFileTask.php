<?php

namespace App\Containers\Storage\Tasks;

use App\Ship\Parents\Tasks\Task;
use Spatie\MediaLibrary\Media;

class DownloadFileTask extends Task
{
    public function run($request)
    {
        $media =  media::find($request->id);
//        switch ($request->model_type) {
//            case 'ngo':
//            $media = Ngo::find($request->id)->getMedia('');
//        }
        return $media;
    }
}
