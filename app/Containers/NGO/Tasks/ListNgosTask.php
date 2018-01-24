<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Parents\Tasks\Task;

class ListNgosTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     *
     */
    // You can add criteria and parameters to sort and limit the results
    // for reference look at "ListUsersTask" in
    // App\Containers\User\Tasks
    // Todo Add criteria and parameters
    public function run($data)
    {
        return $this->repository->paginate();
    }
}
