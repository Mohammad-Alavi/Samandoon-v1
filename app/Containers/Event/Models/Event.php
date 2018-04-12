<?php

namespace App\Containers\Event\Models;

use App\Containers\NGO\Models\NGO;
use App\Ship\Parents\Models\Model;
use Laravel\Scout\Searchable;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * App\Containers\Event\Models\Event
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $favoriters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $likers
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Media[] $media
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 * @mixin \Eloquent
 */
class Event extends Model implements HasMedia
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

    public function ngo(){
        return $this->belongsTo(NGO::class);
    }
}
