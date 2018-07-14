<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Support\Facades\Auth;

class KYCNgoAdminVerificationAction extends Action
{
    public function run(DataTransporter $transporter)
    {
        $processing_admin = Auth::user();
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$transporter->ngo_id]);
        $ngoUpdated = Apiato::call('NGO@KYCNgoAdminVerificationTask', [$ngo, $transporter->judgment, $processing_admin]);
        return $ngoUpdated;
    }
}
