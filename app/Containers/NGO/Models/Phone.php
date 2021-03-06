<?php

namespace App\Containers\NGO\Models;

use App\Ship\Parents\Models\Model;

/**
 * App\Containers\NGO\Models\Phone
 *
 * @property int $id
 * @property string $label
 * @property string $phone_number
 * @property int $ngo_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Phone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Phone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Phone whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Phone whereNgoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Phone wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Phone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Phone extends Model
{
    protected $fillable = [
        'label',
        'phone_number',
        'ngo_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'id',
        'ngo_id',
        'created_at',
        'updated_at'
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
    protected $resourceKey = 'phones';

    public function ngo(){
        return $this->belongsTo(NGO::class);
    }
}
