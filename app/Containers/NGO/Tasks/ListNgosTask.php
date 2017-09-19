<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class ListNgosTask extends Task
{
    /**
     *
     */
    // You can add criteria and parameters to sort and limit the results
    // for reference look at "ListUsersTask" in
    // App\Containers\User\Tasks
    // Todo Add criteria and parameters
    public function run()
    {
        $ngoRepository = App::make(NgoRepository::class);

        return $ngoRepository->paginate();
    }
}
