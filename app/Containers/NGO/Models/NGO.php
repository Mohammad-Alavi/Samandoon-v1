<?php

namespace App\Containers\NGO\Models;

use App\Containers\Event\Models\Event;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Ngo extends Model
{
    protected $fillable = [
        'name',
        'description',
        'subject',
        'province',
        'city',
        'address',
        'registration_date',
        'registration_number',
        'national_number',
        'license_number',
        'license_date',
        'photo_path',
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
