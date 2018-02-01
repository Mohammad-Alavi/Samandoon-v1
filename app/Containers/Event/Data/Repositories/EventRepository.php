<?php

namespace App\Containers\Event\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class EventRepository extends Repository
{
    protected $fieldSearchable = [
        'id'    => '=',
        'title'  => 'like',
        'description' => 'like',
        'event_date' => '='
    ];

    public function boot()
    {
        // probably do some stuff here ...
    }
}
