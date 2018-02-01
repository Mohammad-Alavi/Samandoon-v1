<?php

namespace App\Containers\Event\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class SearchEventsTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            // enter all properties here
            'title',
            'description',
            'event_date',
            'location',
            'ngo_id',
            // allow for undefined properties
            // 'additionalProperties' => true,
        ],
        'required'   => [
            // define the properties that MUST be set
            'ngo_id',
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}
