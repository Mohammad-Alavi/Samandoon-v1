<?php

namespace App\Containers\Article\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class SearchArticlesTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            // enter all properties here
            'text',
            'ngo_id'
            // allow for undefined properties
            // 'additionalProperties' => true,
        ],
        'required'   => [
            // define the properties that MUST be set
            'ngo_id'
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}
