<?php

namespace App\Containers\NGO\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class SearchNgosTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            // enter all properties here
            'name',
            'description',
            'area_of_activity',
            'city',
            'province',
            'address',
            'zip_code',
            'type',
            'user_id',
            'national_number',
            'registration_number',
            'registration_date',
            'registration_unit',
            // allow for undefined properties
            // 'additionalProperties' => true,
        ],
        'required'   => [
            // define the properties that MUST be set
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}
