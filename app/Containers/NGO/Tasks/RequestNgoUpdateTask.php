<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;

class RequestNgoUpdateTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Ngo $ngo, array $data): Ngo
    {
        if (empty($data)) {
            throw new UpdateResourceFailedException('Inputs are empty');
        }

        try {
            DB::beginTransaction();
            $updatedNgo = $this->repository->update($data, $ngo->id);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new UpdateResourceFailedException('Updating NGO failed' . $exception->getMessage());
        } finally {
            DB::commit();
        }
        return $updatedNgo;
    }
}
