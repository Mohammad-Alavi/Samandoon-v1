<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Models\KYCPhoto;
use App\Ship\Parents\Tasks\Task;

class GetKYCPhotosTask extends Task
{
    public function run($ngo)
    {
        $kycPhotos1 = KYCPhoto::whereNgoId($ngo->id)->where(['label' => config('samandoon.kyc_photo_labels.identity_paper')])->latest()->limit(1)->get();
        $kycPhotos2 = KYCPhoto::whereNgoId($ngo->id)->where(['label' => config('samandoon.kyc_photo_labels.national_card_side_one')])->latest()->limit(1)->get();
        $kycPhotos3 = KYCPhoto::whereNgoId($ngo->id)->where(['label' => config('samandoon.kyc_photo_labels.national_card_side_two')])->latest()->limit(1)->get();
        $kycPhotos4 = KYCPhoto::whereNgoId($ngo->id)->where(['label' => config('samandoon.kyc_photo_labels.ngo_registration_doc')])->latest()->limit(1)->get();
        $result = $kycPhotos1->merge($kycPhotos2);
        $result = $result->merge($kycPhotos3);
        $result = $result->merge($kycPhotos4);
        return $result;
    }
}
