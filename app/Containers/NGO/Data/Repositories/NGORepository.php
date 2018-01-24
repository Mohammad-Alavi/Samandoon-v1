<?php

namespace App\Containers\NGO\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class NGORepository extends Repository
{
    protected $fieldSearchable = [
        'id'    => '=',
        'name'  => 'like',
        'area_of_activity'    => 'like',
        'address'    => 'like',
        'type'    => 'like',
        'zip_code'    => '=',
        'national_number'    => '=',
        'registration_number'    => '=',
        'registration_date'    => '=',
        'registration_unit'    => '=',
    ];

    public function boot()
    {
        // probably do some stuff here ...
    }
}
