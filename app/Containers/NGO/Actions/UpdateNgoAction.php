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
        $request->hasFile('logo_photo') ? $logo_photo_path = $request->file('logo_photo')->store('ngo_logo', 'public') : $logo_photo_path = null;
        $request->hasFile('banner_photo') ? $banner_photo_path = $request->file('banner_photo')->store('ngo_banner', 'public') : $banner_photo_path = null;
        !empty($request->input('registration_date')) ? $registration_date = Carbon::createFromFormat('YmdHiT', $request->input('registration_date')) : $registration_date = null;
        !empty($request->input('license_date')) ? $license_date = Carbon::createFromFormat('YmdHiT', $request->input('license_date')) : $license_date = null;

        $ngoData = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'subject' => $request->input('subject'),
            'area_of_activity' => $request->input('area_of_activity'),
            'address' => $request->input('address'),
            'registration_date' => $registration_date,
            'registration_number' => $request->input('registration_number'),
            'national_number' => $request->input('national_number'),
            'license_number' => $request->input('license_number'),
            'license_date' => $license_date,
            'logo_photo_path' => $logo_photo_path,
            'banner_photo_path' => $banner_photo_path,
        ];

        // remove null values and their keys
        $ngoData = array_filter($ngoData);
        $ngo = $this->call(UpdateNgoTask::class, [$ngoData, $request->id]);

        return $ngo;
    }
}
