<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class UpdateNgoTask extends Task
{
    public function run($ngoData, $ngo)
    {
        if (empty($ngoData)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        if (array_key_exists('logo_photo', $ngoData)) {
            Storage::disk('public')->delete($ngo->logo_photo);
            $ngo->logo_photo = $ngoData['logo_photo'];
        }
        if (array_key_exists('banner_photo', $ngoData)) {
            Storage::disk('public')->delete($ngo->banner_photo);
            $ngo->banner_photo = $ngoData['banner_photo'];
        }
        if (array_key_exists('subjects', $ngoData)) {
            $tags = $ngoData['subjects'];
            $ngo->retag($tags);
            //put tags in ngo tag group
            foreach ($ngo->tags as $tag) {
                if (!$tag->isInGroup('ngo')) {
                    $tag->setGroup('ngo');
                };
            }
        }
        $ngo->save();

        return App::make(NgoRepository::class)->update($ngoData, $ngo->id);
    }
}