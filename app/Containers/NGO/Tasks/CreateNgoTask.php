<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;

class CreateNgoTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($ngo_data, $authenticated_user): Ngo
    {
        throw_if($authenticated_user->ngo->id, new CreateResourceFailedException('User already have a NGO.'));

        try {
            // create a new ngo
            $ngo = $this->repository->create([
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
            $authenticated_user->givePermissionTo('manage-article');

            // add ngo id to user who created it
            $authenticated_user->ngo_id = $ngo->id;
            $authenticated_user->save();

            return $ngo;
        } catch (Exception $e) {
            throw new CreateResourceFailedException('Failed to create new NGO.');
        }
    }
}