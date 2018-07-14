<?php

namespace App\Containers\NGO\Models;

use App\Ship\Parents\Models\Model;

/**
 * App\Containers\NGO\Models\KYCPhoto
 *
 * @property int $id
 * @property string $file_name
 * @property string $label
 * @property string $status
 * @property string|null $text
 * @property int $ngo_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereNgoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\KYCPhoto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class KYCPhoto extends Model
{
    protected $fillable = [
        'file_name',
        'label',
        'status',
        'ngo_id',
        'admin_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $table = 'kyc_photos';
    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'kycphotos';

    public function ngo(){
        return $this->belongsTo(NGO::class);
    }
}
