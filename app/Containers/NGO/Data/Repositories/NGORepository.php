<?php

namespace App\Containers\NGO\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class NGORepository
 */
class NGORepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'    => '=',
        'name'  => 'like',
        'subject'    => 'like',
        'area_of_activity'    => 'like',
        'registration_date'    => '=',
        'registration_number'    => '=',
        'national_number'    => '=',
        'license_number'    => '=',
        'license_date'    => '=',
    ];

    public function boot()
    {
        // probably do some stuff here ...
    }
}
