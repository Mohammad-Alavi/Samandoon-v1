<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;

class SearchNgosTask extends Task
{
    public function run(DataTransporter $data)
    {
        return Ngo::Search($data->q)->paginate();
    }
}
