<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;

class CreateNgoTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($ngoData, $authenticated_user): Ngo
    {
        try {
            // create a new ngo
            $ngo = $this->repository->create($ngoData);

            // give manage-event permission to authenticated user
            $authenticated_user->givePermissionTo('manage-event');
            $authenticated_user->givePermissionTo('manage-article');

            // add ngo id to user who created it
            $authenticated_user->ngo_id = $ngo->id;
            $authenticated_user->save();

            return $ngo;
        } catch (Exception $e) {
            throw new CreateResourceFailedException('Failed to create new NGO.');
        }
    }
}