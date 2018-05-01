<?php

namespace App\Containers\Storage\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use PDF;

class DownloadPDFTask extends Task
{
    public function run($request)
    {
        $ngo = User::find(2)->ngo()->first();
        $pdf = PDF::loadView('user::user-welcome', ['ngo' => $ngo]);
        return $pdf->download();
    }
}
