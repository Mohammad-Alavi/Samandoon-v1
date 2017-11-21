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
    public function run($ngoData, $ngoId)
    {
        if (empty($ngoData)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        if ($ngoData->logo_photo_path) {
            Storage::disk('public')->delete('ngo_logo'.'/'.Apiato::call('NGO@FindNgoByIdTask', $ngoId)->logo_photo_path);
        }

        if ($ngoData->banner_photo_path !== null) {
            Storage::disk('public')->delete('ngo_banner'.'/'.Apiato::call('NGO@FindNgoByIdTask', $ngoId)->logo_banner_path);
        }

        return App::make(NgoRepository::class)->update($ngoData, $ngoId);
    }
}
