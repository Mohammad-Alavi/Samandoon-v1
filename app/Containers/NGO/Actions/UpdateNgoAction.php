<?php

namespace App\Containers\NGO\Actions;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateNgoAction extends Action
{
    public function run(Request $request): Ngo
    {
        $ngo = $this->call('NGO@FindNgoByIdTask', [$request->id]);
        $this->call('NGO@CheckHasAccessToNgoTask', [$request]);
;
        $data = $request->sanitizeInput([
            'description',
            'area_of_activity',
            'subjects',
            'address',
            'zip_code',
            'ngo_logo',
            'ngo_banner'
        ]);

        return $this->call('NGO@UpdateNgoTask', [$ngo, $data]);
    }
}
