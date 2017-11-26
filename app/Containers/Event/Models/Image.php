<?php

namespace App\Containers\Event\Models;

use App\Ship\Parents\Models\Model;

class Image extends Model
{
    protected $fillable = [
        'image',
        'event_id',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

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
    protected $resourceKey = 'images';

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
