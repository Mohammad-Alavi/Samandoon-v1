<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\KYCPhotoRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;

class SendKYCPhotoTask extends Task
{
    private $repository;

    public function __construct(KYCPhotoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($data, $ngo)
    {
        try {
            DB::beginTransaction();

            $KYCPhoto = $this->repository->create([
                'status' => config('samandoon.kyc_photo_status.sent'),
                'file_name' => md5(microtime()),
                'label' => $data->label,
                'ngo_id' => $ngo->id
            ]);

            $ngo->addMediaFromRequest('image')
                ->usingName($KYCPhoto->file_name)
                ->usingFileName($KYCPhoto->file_name . '.' . $data->image->getClientOriginalExtension())
                ->toMediaCollection($data->label);

        } catch (Exception $exception) {
            DB::rollBack();
            throw new CreateResourceFailedException($exception->getMessage());
        } finally {
            DB::commit();
        }
        return $KYCPhoto;
    }
}
