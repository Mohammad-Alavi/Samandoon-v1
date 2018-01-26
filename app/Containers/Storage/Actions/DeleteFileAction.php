<?php

namespace App\Containers\Storage\Actions;

use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Spatie\MediaLibrary\Media;

class DeleteFileAction extends Action
{
    public function run(Request $request)
    {
        $media = Media::find($request->id);
        throw_unless($media, new NotFoundException('Media not found.'));

        return $this->call('Storage@DeleteFileTask', [$media]);
    }
}