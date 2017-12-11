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
        $ngo = $this->call('NGO@FindNgoByIdTask', [$request->id]);
        $this->call('NGO@CheckHasAccessToNgoTask', [$request]);

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
