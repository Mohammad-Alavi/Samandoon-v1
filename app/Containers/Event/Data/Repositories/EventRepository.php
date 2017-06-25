<?php

namespace App\Containers\Event\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
/**
 * Class EventRepository
 */
class EventRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'    => '=',
        'title'  => 'like',
    ];

    public function boot()
    {
        // probably do some stuff here ...
    }
}
