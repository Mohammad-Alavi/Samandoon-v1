<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class UpdateNgoTask extends Task
{
    public function run($ngoData, $ngoId)
    {
        if (empty($ngoData)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        return App::make(NgoRepository::class)->update($ngoData, $ngoId);
    }
}
