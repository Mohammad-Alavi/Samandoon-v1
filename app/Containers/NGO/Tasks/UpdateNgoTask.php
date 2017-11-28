<?php

namespace App\Containers\NGO\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
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
        $ngo->save();

        return App::make(NgoRepository::class)->update($ngoData, $ngo->id);
    }
}
