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
        'area_of_activity',
        'address',
        'registration_date',
        'registration_number',
        'national_number',
        'license_number',
        'license_date',
        'logo_photo_path',
        'banner_photo_path',
        'user_id',
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
