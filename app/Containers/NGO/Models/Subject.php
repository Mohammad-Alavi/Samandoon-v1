<?php

namespace App\Containers\NGO\Models;

use App\Ship\Parents\Models\Model;

/**
 * App\Containers\NGO\Models\Subject
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\NGO\Models\Ngo[] $ngos
 * @mixin \Eloquent
 * @property int $id
 * @property string $subject
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Subject whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Subject whereUpdatedAt($value)
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
