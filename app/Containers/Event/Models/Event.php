<?php

namespace App\Containers\Event\Models;

use App\Containers\NGO\Models\NGO;
use App\Ship\Parents\Models\Model;
use Laravel\Scout\Searchable;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

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
            'location' => $this->location,
            'event_date' => $this->event_date,
        ];

        // Customize array...

        return $array;
    }

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'event_image',
        'location',
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
