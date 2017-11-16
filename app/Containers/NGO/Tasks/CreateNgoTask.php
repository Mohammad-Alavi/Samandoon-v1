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
        $name = $request->input('name');
        $description = $request->input('description');
        $subject = $request->input('subject');
        $area_of_activity = $request->input('area_of_activity');
        $address = $request->input('address');
        !empty($request->input('registration_date')) ? $registration_date = Carbon::createFromFormat('YmdHiT', $request->input('registration_date')) : $registration_date = null;
        $registration_number = $request->input('registration_number');
        $national_number = $request->input('national_number');
        $license_number = $request->input('license_number');
        !empty($request->input('license_date')) ? $license_date = Carbon::createFromFormat('YmdHiT', $request->input('license_date')) : $license_date = null;
        $request->hasFile('logo_photo') ? $logo_photo_path = $request->file('logo_photo')->store('logo_photo') : $logo_photo_path = null;
        $request->hasFile('banner_photo') ? $banner_photo_path = $request->file('banner_photo')->store('banner_photo') : $banner_photo_path = null;

        try {
            if($authenticated_user->ngo) {
                throw new AlreadyHaveOneNgoException;
            }
            else {
                // create a new ngo
                $ngo = App::make(NgoRepository::class)->create([
                    'name' => $name,
                    'description' => $description,
                    'subject' => $subject,
                    'area_of_activity' => $area_of_activity,
                    'address' => $address,
                    'registration_date' => $registration_date,
                    'registration_number' => $registration_number,
                    'national_number' => $national_number,
                    'license_number' => $license_number,
                    'license_date' => $license_date,
                    'logo_photo_path' => $logo_photo_path,
                    'banner_photo_path' => $banner_photo_path,
                    'user_id' => $authenticated_user->getHashedKey(),
                ]);

                // give manage-event permission to authenticated user
                $authenticated_user->givePermissionTo('manage-event');

                // add ngo id to user who created it
                $authenticated_user->ngo_id = $ngo->getHashedKey();
                $authenticated_user->save();
            }
        } catch (Exception $e) {
            throw (new NgoCreationFailedException);
        }

        return $ngo;
    }
}
