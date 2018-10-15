<?php

namespace App\Containers\Storage\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Auth;
use PDF;

class DownloadPDFTask extends Task
{
    public function run($ngo)
    {
//        $ngo = User::find(2)->ngo()->first();
        $pdf = PDF::loadView('ngo::timeline-pdf', ['ngo' => $ngo]);
        return $pdf;
    }
}
