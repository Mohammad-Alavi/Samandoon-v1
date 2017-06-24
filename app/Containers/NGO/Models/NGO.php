<?php

namespace App\Containers\NGO\Models;

use App\Ship\Parents\Models\Model;

class NGO extends Model
{
    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
