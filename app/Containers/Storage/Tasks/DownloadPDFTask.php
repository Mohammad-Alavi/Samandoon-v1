<?php

namespace App\Containers\Storage\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use PDF;

class DownloadPDFTask extends Task
{
    public function run($request)
    {
        $ngo = auth(2)->ngo()->first();
//        $ngo = auth()->user()->ngo();

        $pdf = PDF::loadView('ngo::timeline-pdf', ['ngo' => $ngo]);
        return $pdf;
    }
}
