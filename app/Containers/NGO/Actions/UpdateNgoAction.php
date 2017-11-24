<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Tasks\UpdateNgoTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;

class UpdateNgoAction extends Action
{
    public function run(Request $request)
    {
        Apiato::call('NGO@FindNgoByIdTask', [$request->id]);
        Apiato::call('NGO@CheckHasAccessToNgoTask', [$request]);
        // check if has access to manage and delete ngo then deletes the ngo
        $request->hasFile('logo_photo') ? $logo_photo = $request->file('logo_photo')->store('ngo_logo', 'public') : $logo_photo = null;
        $request->hasFile('banner_photo') ? $banner_photo = $request->file('banner_photo')->store('ngo_banner', 'public') : $banner_photo = null;

        $ngoData = [
//            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'area_of_activity' => $request->input('area_of_activity'),
            'address' => $request->input('address'),
            'zip_code' => $request->input('zip_code'),
            'logo_photo' => $logo_photo,
            'banner_photo' => $banner_photo,
//            'type' => $request->input('type'),
//            'national_number' => $request->input('national_number'),
//            'registration_number' => $request->input('registration_number'),
//            'registration_date' => $request->input('registration_date'),
//            'registration_unit' => $request->input('registration_unit'),
        ];

        // remove null values and their keys
        $ngoData = array_filter($ngoData);
        $ngo = $this->call(UpdateNgoTask::class, [$ngoData, $request->id]);

        return $ngo;
    }
}
