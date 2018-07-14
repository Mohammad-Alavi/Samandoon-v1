<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Auth;

class KYCPhotoAdminVerificationAction extends Action
{
    public function run(DataTransporter $transporter)
    {
        $processing_admin = Auth::user();
        $kycPhoto = Apiato::call('NGO@KYCPhotoAdminVerificationTask', [$transporter->photo_id, $transporter->judgment, $processing_admin]);
        return $kycPhoto;
    }
}
