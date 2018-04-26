<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateNgoAction extends Action
{
    public function run(Request $request): Ngo
    {
        $authenticated_user = $this->call('Authentication@GetAuthenticatedUserTask');
        throw_if($authenticated_user->ngo->id, CreateResourceFailedException::class, 'User already have a NGO');
        throw_if(NGO::where('national_number', $request->national_id)->get()->isNotEmpty(), CreateResourceFailedException::class, 'This NGO is already registered');
        $ngoData = Apiato::call('NGO@FindNgoByNationalIdTask', [$request->national_id]);
        $fixedNgoData = [
            'name' => $ngoData['ResultList']['0']['Name'],
            'address' => $ngoData['ResultList']['0']['Address'],
            'status' => $ngoData['ResultList']['0']['ObjectStateTitle'],
            'zip_code' => $ngoData['ResultList']['0']['PostCode'],
            'type' => $ngoData['ResultList']['0']['CompanyType'],
            'national_number' => $ngoData['ResultList']['0']['NationalCode'],
            'registration_number' => $ngoData['ResultList']['0']['RegisterNumber'],
            'registration_date' => $ngoData['ResultList']['0']['RegisterDate'],
            'registration_unit' => $ngoData['ResultList']['0']['UnitName'],
            'user_id' => $authenticated_user->id
        ];

        return Apiato::call('NGO@CreateNgoTask', [$fixedNgoData, $authenticated_user]);
    }
}
