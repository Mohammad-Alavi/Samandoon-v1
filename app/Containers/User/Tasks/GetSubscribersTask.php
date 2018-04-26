<?php

namespace App\Containers\User\Tasks;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Tasks\Task;

class GetSubscribersTask extends Task
{
    public function run(Ngo $ngo, $limit)
    {
        return $ngo->subscribers()->paginate($limit ? $limit : 10);
    }
}
