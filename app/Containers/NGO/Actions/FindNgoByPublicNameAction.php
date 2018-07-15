<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class FindNgoByPublicNameAction extends Action
{
    public function run(DataTransporter $transporter)
    {
        $ngo = Apiato::call('NGO@FindNgoByPublicNameTask', [$transporter->public_name]);
        return $ngo;
    }
}
