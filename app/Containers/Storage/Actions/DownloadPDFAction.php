<?php

namespace App\Containers\Storage\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use Auth;

class DownloadPDFAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [Auth::user()->ngo_id]);
        Apiato::call('NGO@CheckHasAccessToNgoTask', [$ngo]);
        $file = Apiato::call('Storage@DownloadPDFTask', [$request]);
        return $file;
    }
}
