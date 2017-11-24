<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\SubjectRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class GetNgoSubjectsTask extends Task
{
    public function run()
    {
        return $subjects = App::make(SubjectRepository::class)->paginate();
    }
}
