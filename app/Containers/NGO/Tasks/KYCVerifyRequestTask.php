<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;

class KYCVerifyRequestTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($ngo)
    {
        try {
            DB::beginTransaction();

            $ngoUpdated = $this->repository->update([
                'verification_status' => config('samandoon.ngo_verification_status.requested'),
            ], $ngo->id);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new CreateResourceFailedException($exception->getMessage());
        } finally {
            DB::commit();
        }
        return $ngoUpdated;
    }
}