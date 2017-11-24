<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

class GetNgoSubjectsAction extends Action
{
    public function run()
    {
        return Apiato::call('NGO@GetNgoSubjectsTask');
    }
}
