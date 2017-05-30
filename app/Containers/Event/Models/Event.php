<?php

namespace App\Containers\Event\Models;

use App\Ship\Parents\Models\Model;

class Event extends Model
{
    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
