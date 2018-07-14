<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Parents\Tasks\Task;

class GetAllVerificationRequestsTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        $ngos = $this->repository->findByField(['verification_status' => config('samandoon.ngo_verification_status.requested')]);
        return $ngos;
    }
}
