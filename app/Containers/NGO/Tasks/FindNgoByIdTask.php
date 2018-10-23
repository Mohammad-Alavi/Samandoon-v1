<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindNgoByIdTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): Ngo
    {
        try {
            $ngo = Ngo::withoutGlobalScope()->find($id);
        } catch (Exception $exception) {
        }
        throw_if(empty($ngo->id), NotFoundException::class, 'NGO not found');
        return $ngo;
    }
}
