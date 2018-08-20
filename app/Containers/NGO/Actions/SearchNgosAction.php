<?php

namespace App\Containers\NGO\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class SearchNgosAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'q',
            'area_of_activity',
            'subject',
            'city',
            'province',
        ]);

        $result = Apiato::call('NGO@SearchNgosTask', [$data]);
        return $result;
    }
}
