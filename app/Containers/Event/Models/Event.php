<?php

namespace App\Containers\Event\Models;

use App\Containers\NGO\Models\NGO;
use App\Ship\Parents\Models\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'event_date',
        'location',
        'banner_image',
        'ngo_id',
    ];

    //protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function ngo(){
        return $this->belongsTo(NGO::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
