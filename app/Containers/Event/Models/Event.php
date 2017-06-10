<?php

namespace App\Containers\Event\Models;

use App\Ship\Parents\Models\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'event_date', 'photo_path'];

    //protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
