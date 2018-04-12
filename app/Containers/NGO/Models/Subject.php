<?php

namespace App\Containers\NGO\Models;

use App\Ship\Parents\Models\Model;

/**
 * App\Containers\NGO\Models\Subject
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\NGO\Models\Ngo[] $ngos
 * @mixin \Eloquent
 */
class Subject extends Model
{
    protected $fillable = [
        'subject'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot',
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
    protected $resourceKey = 'subjects';

    public function ngos(){
        return $this->belongsToMany(Ngo::class);
    }
}
