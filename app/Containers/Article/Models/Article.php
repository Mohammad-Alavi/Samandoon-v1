<?php

namespace App\Containers\Article\Models;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Models\Model;
use BrianFaust\Commentable\Traits\HasComments;
use Laravel\Scout\Searchable;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

/**
 * App\Containers\Article\Models\Article
 *
 * @property-read \Kalnoy\Nestedset\Collection|\BrianFaust\Commentable\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $favoriters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $likers
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Media[] $media
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 * @mixin \Eloquent
 */
class Article extends Model implements HasMedia
{
    use Searchable;
    use HasMediaTrait;
    use CanBeLiked, CanBeFavorited;
    use HasComments;

    public $asYouType = true;

    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'text' => $this->text,
        ];

        // Customize array...

        return $array;
    }

    protected $fillable = [
        'text',
        'ngo_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

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
    protected $resourceKey = 'articles';

    public function ngo()
    {
        return $this->belongsTo(ngo::class);
    }
}