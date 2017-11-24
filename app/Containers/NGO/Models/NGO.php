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
        'area_of_activity',
        'address',
        'zip_code',
        'type',
        'logo_photo',
        'banner_photo',
        'user_id',
        'national_number',
        'registration_number',
        'registration_date',
        'registration_unit',
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

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
}
