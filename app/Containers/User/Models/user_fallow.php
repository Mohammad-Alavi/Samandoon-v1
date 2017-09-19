<?php

namespace App\Containers\User\Models;

use App\Ship\Parents\Models\Model;

class user_fallow extends Model
{
    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
