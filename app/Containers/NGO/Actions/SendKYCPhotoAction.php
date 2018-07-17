<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Auth;

class SendKYCPhotoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [Auth::user()->ngo->id]);
        Apiato::call('NGO@CheckHasAccessToNgoTask', [$ngo]);
        Apiato::call('NGO@SendKYCPhotoTask', [$request, $ngo]);
        $kycPhotos = Apiato::call('NGO@GetKYCPhotosTask', [$ngo]);

        return $kycPhotos;
    }
}
