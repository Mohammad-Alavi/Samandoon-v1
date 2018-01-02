<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateNgoAction extends Action
{
    public function run(Request $request)
    {
        $ngo = $this->call('NGO@FindNgoByIdTask', [$request->id]);
        $this->call('NGO@CheckHasAccessToNgoTask', [$request]);

        info($request);
        $data = $request->sanitizeInput([
            'description',
            'area_of_activity',
            'subjects',
            'address',
            'zip_code',
            'logo_photo',
            'banner_photo'
        ]);

        $ngo = $this->call('NGO@UpdateNgoTask', [$ngo, $data]);
        return $ngo;
    }
}
