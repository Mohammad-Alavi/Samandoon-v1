<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class GetKYCPhotosAction extends Action
{
    public function run(DataTransporter $transporter)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$transporter->ngo_id]);

        $kycPhotos = Apiato::call('NGO@GetKYCPhotosTask', [$ngo]);
        return $kycPhotos;
    }
}
