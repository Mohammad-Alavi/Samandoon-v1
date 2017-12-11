<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\App;

class FindNgoByIdTask extends Task
{
    public function run($ngoId)
    {
        // find the ngo by its id
        try {
            $ngo = App::make(NgoRepository::class)->find($ngoId);
            if (empty($ngo->id)) {
                throw new NotFoundException('NGO not found.');
            }
        } catch (Exception $e) {
            throw new NotFoundException('NGO not found.');
        }

        return $ngo;
    }
}
