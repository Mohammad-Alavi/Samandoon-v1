<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Tasks\ConvertNGONameFromArabicToPersianTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class RequestNgoUpdateAction extends Action
{
    public function run(DataTransporter $transporter)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$transporter->id]);
        Apiato::call('NGO@CheckHasAccessToNgoTask', [$ngo]);

        $ngoData = Apiato::call('NGO@FindNgoByNationalIdTask', [$ngo->national_number]);
        $fixedNgoData = [
            'name' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($ngoData['ResultList']['0']['Name']),
            'address' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($ngoData['ResultList']['0']['Address']),
            'status' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($ngoData['ResultList']['0']['ObjectStateTitle']),
            'zip_code' => $ngoData['ResultList']['0']['PostCode'],
            'type' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($ngoData['ResultList']['0']['CompanyType']),
            'national_number' => $ngoData['ResultList']['0']['NationalCode'],
            'registration_number' => $ngoData['ResultList']['0']['RegisterNumber'],
            'registration_date' => $ngoData['ResultList']['0']['RegisterDate'],
            'registration_unit' => ConvertNGONameFromArabicToPersianTask::arabicToPersian($ngoData['ResultList']['0']['UnitName']),
            'verification_status' => config('samandoon.ngo_verification_status.unverified'),
        ];

        $ngo = Apiato::call('NGO@RequestNgoUpdateTask', [$ngo, $fixedNgoData]);
        return $ngo;
    }
}
