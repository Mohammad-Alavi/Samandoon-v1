<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;

class FindNgoByIdTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): Ngo
    {
        $ngo = $this->repository->find($id);
        throw_if(empty($ngo->id), new NotFoundException('NGO not found.'));
        return $ngo;
    }
}
