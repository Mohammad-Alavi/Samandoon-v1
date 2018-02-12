<?php

namespace App\Containers\Location\Models;

use App\Ship\Parents\Models\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'globalCode',
        'lft',
        'rgt',
        'lvl',
        'parent',
        'published'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'locations';
}
