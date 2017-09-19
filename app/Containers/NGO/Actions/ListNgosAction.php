<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Tasks\ListNgosTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListNgosAction extends Action
{
    public function run(Request $request)
    {
        $ngos = $this->call(ListNgosTask::class, [$request]);

        return $ngos;
    }
}
