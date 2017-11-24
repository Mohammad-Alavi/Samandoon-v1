<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Exceptions\AlreadyHaveOneNgoException;
use App\Containers\NGO\Exceptions\NgoCreationFailedException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class CreateNgoTask extends Task
{
    public function run(Request $request, $authenticated_user)
    {
        $request->hasFile('logo_photo') ? $logo_photo = $request->file('logo_photo')->store('ngo_logo', 'public') : $logo_photo = null;
        $request->hasFile('banner_photo') ? $banner_photo = $request->file('banner_photo')->store('ngo_banner', 'public') : $banner_photo = null;

        try {
            if($authenticated_user->ngo) {
                throw new AlreadyHaveOneNgoException;
            }
            else {
                // create a new ngo
                $ngo = App::make(NgoRepository::class)->create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'area_of_activity' => $request->area_of_activity,
                    'address' => $request->address,
                    'zip_code' => $request->zip_code,
                    'type' => $request->type,
                    'national_number' => $request->national_number,
                    'registration_number' => $request->registration_number,
                    'registration_date' => $request->registration_date,
                    'registration_unit' => $request->registration_unit,
                    'logo_photo' => $logo_photo,
                    'banner_photo' => $banner_photo,
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
