<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\KYCPhotoRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;

class KYCPhotoAdminVerificationTask extends Task
{
    private $repository;

    public function __construct(KYCPhotoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, $judgment, $processing_admin)
    {
        try {
            $kycPhoto = $this->repository->find($id);
        } catch (Exception $exception) {
        }
        throw_if(empty($kycPhoto->id), NotFoundException::class, 'KYC Photo not found');

        try {
            DB::beginTransaction();

            $kycPhotoUpdated = $this->repository->update([
                'status' => $judgment,
                'admin_id' => $processing_admin->id
            ], $id);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new CreateResourceFailedException($exception->getMessage());
        } finally {
            DB::commit();
        }
        return $kycPhotoUpdated;
    }
}
