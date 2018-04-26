<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Tasks\Task;

class GetSubscribersTask extends Task
{
    public function run(Ngo $ngo, $limit = 10)
    {
        return $ngo->subscribers()->paginate($limit);
    }
}
