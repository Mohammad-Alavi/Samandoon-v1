<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Tasks\CheckHasAccessToNgoTask;
use App\Containers\NGO\Tasks\DeleteNgoTask;
use App\Containers\NGO\Tasks\FindNgoByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteNgoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = $this->call(FindNgoByIdTask::class, [$request->id]);

        // check if has access to manage and delete ngo then deletes the ngo
        if($this->call(CheckHasAccessToNgoTask::class, [$ngo])){
            $this->call(DeleteNgoTask::class, [$ngo]);
        }

        return $ngo;
    }
}
