<?php

namespace App\Containers\NGO\Models;

use App\Ship\Parents\Models\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'text',
        'ngo_id'
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
    protected $resourceKey = 'articles';

    public function ngo()
    {
        return $this->belongsTo(ngo::class);
    }
}
