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
    ];

    public function boot()
    {
        // probably do some stuff here ...
    }
}
