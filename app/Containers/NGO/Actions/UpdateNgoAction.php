<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\NGO\Tasks\UpdateNgoTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Vinkla\Hashids\Facades\Hashids;

class UpdateNgoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = Apiato::call('NGO@FindNgoByIdTask', [$request->id]);
        Apiato::call('NGO@CheckHasAccessToNgoTask', [$request]);

        $request->hasFile('logo_photo') ? $logo_photo = $request->logo_photo->store(Hashids::encode($ngo->user->id) . '/' . Hashids::encode($ngo->id), 'public') : $logo_photo = null;
        $request->hasFile('banner_photo') ? $banner_photo = $request->banner_photo->store(Hashids::encode($ngo->user->id) . '/' . Hashids::encode($ngo->id), 'public'): $banner_photo = null;

        $ngoData = [
            'description' => $request->input('description'),
            'area_of_activity' => $request->input('area_of_activity'),
            'subjects'  => $request->input('subjects'),
            'address' => $request->input('address'),
            'zip_code' => $request->input('zip_code'),
            'logo_photo' => $logo_photo,
            'banner_photo' => $banner_photo,
        ];

        // remove null values and their keys
        $ngoData = array_filter($ngoData);
        $ngo = $this->call(UpdateNgoTask::class, [$ngoData, $ngo]);

        return $ngo;
    }
}
