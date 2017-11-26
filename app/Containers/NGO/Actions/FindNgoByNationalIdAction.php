<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class FindNgoByNationalIdAction extends Action
{
    public function run(Request $request)
    {
        $ngo_data = Apiato::call('NGO@FindNgoByNationalIdTask', [$request->national_id]);
        $ngo = new Ngo();
        $ngo->name = $ngo_data['ResultList']['0']['Name'];
        $ngo->address = $ngo_data['ResultList']['0']['Address'];
        $ngo->zip_code = $ngo_data['ResultList']['0']['PostCode'];
        $ngo->type = $ngo_data['ResultList']['0']['CompanyType'];
        $ngo->national_number = $ngo_data['ResultList']['0']['NationalCode'];
        $ngo->registration_number = $ngo_data['ResultList']['0']['RegisterNumber'];
        $ngo->registration_date = $ngo_data['ResultList']['0']['RegisterDate'];
        $ngo->registration_unit = $ngo_data['ResultList']['0']['UnitName'];
        return $ngo;
    }
}
