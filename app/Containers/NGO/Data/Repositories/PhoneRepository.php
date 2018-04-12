<?php

namespace App\Containers\NGO\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PhoneRepository
 */
class PhoneRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
