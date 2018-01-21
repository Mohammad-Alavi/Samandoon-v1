<?php

namespace App\Containers\Event\Models;

use App\Containers\NGO\Models\NGO;
use App\Ship\Parents\Models\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Event extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'location',
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
}
