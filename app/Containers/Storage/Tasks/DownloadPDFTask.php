<?php

namespace App\Containers\Storage\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use PDF;

class DownloadPDFTask extends Task
{
    public function run($request)
    {
        //To file
//        $snappy = App::make('snappy.pdf.wrapper');
//        $html = '<h1>Bill</h1><p>Samandoon, a place for Samans</p>';
//        $pdf = PDF::loadHTML($html);
//        return $pdf->inline();
        $ngo = User::find(2)->ngo()->first();
        $activity = [];
        $pdf = PDF::loadView('user::user-welcome', ['ngo' => $ngo]);
//        $pdf = PDF::loadView('vendor.stream-laravel.render_activity');
        return $pdf->download();

//        $pdf::generate('http://www.github.com', '/tmp/github.pdf');
//        $snappy->generateFromHtml($html, public_path() . '/storage/' . 'tmp/bill-123.pdf');
//        $snappy->generate('http://www.github.com', public_path() . '/storage/' . 'tmp/github.pdf');
        //Or output:
        return $snappy->getOutputFromHtml($html);
    }
}
