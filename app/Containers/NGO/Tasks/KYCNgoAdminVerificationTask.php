<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;

class KYCNgoAdminVerificationTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Ngo $ngo, $judgment, $processing_admin)
    {
        try {
            DB::beginTransaction();

            $ngoUpdated = $this->repository->update([
                'verification_status' => $judgment,
                'verification_admin_id' => $processing_admin->id
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
