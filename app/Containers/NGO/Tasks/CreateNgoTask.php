<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Exceptions\AlreadyHaveOneNgoException;
use App\Containers\NGO\Exceptions\NgoCreationFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class CreateNgoTask extends Task
{
    public function run($ngo_data, $authenticated_user)
    {
        try {
            if($authenticated_user->ngo) {
                throw new AlreadyHaveOneNgoException;
            }
            else {
                // create a new ngo
                $ngo = App::make(NgoRepository::class)->create([
                    'name' => $ngo_data['ResultList']['0']['Name'],
                    'address' => $ngo_data['ResultList']['0']['Address'],
                    'zip_code' => $ngo_data['ResultList']['0']['PostCode'],
                    'type' => $ngo_data['ResultList']['0']['CompanyType'],
                    'national_number' => $ngo_data['ResultList']['0']['NationalCode'],
                    'registration_number' => $ngo_data['ResultList']['0']['RegisterNumber'],
                    'registration_date' => $ngo_data['ResultList']['0']['RegisterDate'],
                    'registration_unit' => $ngo_data['ResultList']['0']['UnitName'],
                    'user_id' => $authenticated_user->id,
                ]);

                // give manage-event permission to authenticated user
                $authenticated_user->givePermissionTo('manage-event');

                // add ngo id to user who created it
                $authenticated_user->ngo_id = $ngo->id;
                $authenticated_user->save();
            }
        } catch (Exception $e) {
            throw (new NgoCreationFailedException);
        }

        return $ngo;
    }
}
