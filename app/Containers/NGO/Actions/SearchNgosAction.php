<?php

namespace App\Containers\NGO\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class SearchNgosAction extends Action
{
    public function run(DataTransporter $data)
    {
        return $this->call('NGO@SearchNgosTask', [$data]);
    }
}
