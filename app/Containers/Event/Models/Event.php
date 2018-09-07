<?php

namespace App\Containers\Event\Models;

use App\Containers\NGO\Models\NGO;
use App\Scopes\ExcludeUnconfirmedNgo;
use App\Ship\Parents\Models\Model;
use Laravel\Scout\Searchable;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

/**
 * App\Containers\Event\Models\Event
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property \Carbon\Carbon $event_date
 * @property string $city
 * @property string $province
 * @property string|null $address
 * @property int $ngo_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property float|null $lat
 * @property float|null $long
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $favoriters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $likers
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Media[] $media
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereEventDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereNgoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Event\Models\Event whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Event extends Model implements HasMediaConversions
{
    use Searchable;
    use HasMediaTrait;
    use CanBeLiked, CanBeFavorited;

    public $asYouType = true;

    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
        ];

        // Customize array...

        return $array;
    }

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'city',
        'province',
        'lat',
        'long',
        'address',
        'ngo_id',
    ];
    //protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'event_date'
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'events';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ExcludeUnconfirmedNgo);
    }

    public function ngo(){
        return $this->belongsTo(NGO::class);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(600)->height(337.5)->keepOriginalImageFormat();
    }
}
