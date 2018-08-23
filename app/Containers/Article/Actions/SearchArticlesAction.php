<?php

namespace App\Containers\Article\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class SearchArticlesAction extends Action
{
    public function run(DataTransporter $data)
    {
        $sanitizedData = $data->sanitizeInput([
            'q',
            'area_of_activity',
            'subject',
            'city',
            'province',
        ]);

        return Apiato::call('Article@SearchArticlesTask', [$sanitizedData, $data->limit]);
    }
}
