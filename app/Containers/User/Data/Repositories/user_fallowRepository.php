<?php

namespace App\Containers\User\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class user_fallowRepository
 */
class user_fallowRepository extends Repository
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
