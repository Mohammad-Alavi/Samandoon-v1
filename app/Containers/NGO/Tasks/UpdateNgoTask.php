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

        if (array_key_exists('logo_photo_path', $ngoData)) {
            Storage::disk('public')->delete(Apiato::call('NGO@FindNgoByIdTask', [$ngoId])->logo_photo_path);
        }

        if (array_key_exists('banner_photo_path', $ngoData)) {
            Storage::disk('public')->delete(Apiato::call('NGO@FindNgoByIdTask', [$ngoId])->banner_photo_path);
        }

        return App::make(NgoRepository::class)->update($ngoData, $ngoId);
    }
}
