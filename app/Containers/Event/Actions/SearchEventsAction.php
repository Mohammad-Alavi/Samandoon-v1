<?php

namespace App\Containers\Event\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class SearchEventsAction extends Action
{
    public function run(DataTransporter $data)
    {
        $sanitizedData = $data->sanitizeInput([
            'q',
            'area_of_activity', // ngo
            'subject', // ngo
            'city', // event
            'province', // event
        ]);

         return Apiato::call('Event@SearchEventsTask', [$sanitizedData, $data->limit]);
    }
}
