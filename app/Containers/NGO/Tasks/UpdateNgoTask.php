<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;

class UpdateNgoTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Ngo $ngo, array $data)
    {
        if (empty($data)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        try {
            if (array_key_exists('logo_photo', $data)) {
                $ngo->clearMediaCollection('ngo_logo');
                $ngo->addMediaFromRequest('logo_photo')->toMediaCollection('ngo_logo');
            }
            if (array_key_exists('banner_photo', $data)) {
                $ngo->clearMediaCollection('ngo_banner');
                $ngo->addMediaFromRequest('banner_photo')->toMediaCollection('ngo_banner');
            }
            return $this->repository->update($data, $ngo->id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException('Updating NGO failed');
        }
    }
}