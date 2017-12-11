<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Ship\Parents\Tasks\Task;

class DeleteNgoTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($ngo)
    {
        $ngo->clearMediaCollection('ngo_logo');
        $ngo->clearMediaCollection('ngo_banner');

        // revoke user's permission to manage events
        $ngo->user->revokePermissionTo('manage-event');
        $ngo->user->revokePermissionTo('manage-article');

        return $this->repository->delete($ngo->id);
    }
}
