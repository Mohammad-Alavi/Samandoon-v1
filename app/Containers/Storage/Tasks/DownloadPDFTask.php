<?php

namespace App\Containers\Storage\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Auth;
use PDF;

class DownloadPDFTask extends Task
{
    public function run($request)
    {
//        $ngo = User::find(2)->ngo()->first();
        $ngo = Auth::user()->ngo();
        $pdf = PDF::loadView('ngo::timeline-pdf', ['ngo' => $ngo]);
        return $pdf;
    }
}
