<?php

namespace App\Containers\NGO\Models;

use App\Ship\Parents\Models\Model;

/**
 * App\Containers\NGO\Models\Phone
 *
 * @mixin \Eloquent
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 */
class Phone extends Model
{
    protected $fillable = [
        'label',
        'phone_number',
        'ngo_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'ngo_id',
        'created_at',
        'updated_at'
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
    protected $resourceKey = 'phones';

    public function ngo(){
        return $this->belongsTo(NGO::class);
    }
}
