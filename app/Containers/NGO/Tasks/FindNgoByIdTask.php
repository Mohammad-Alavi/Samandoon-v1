<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Exceptions\NgoNotFoundException;
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
        } catch (Exception $e) {
            throw new NgoNotFoundException;
        }

        return $ngo;
    }
}
