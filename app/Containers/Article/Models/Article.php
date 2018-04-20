<?php

namespace App\Containers\Article\Models;

use App\Containers\NGO\Models\Ngo;
use App\Ship\Parents\Models\Model;
use BrianFaust\Commentable\Traits\HasComments;
use CyrildeWit\PageViewCounter\Traits\HasPageViewCounter;
use Laravel\Scout\Searchable;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

/**
 * App\Containers\Article\Models\Article
 *
 * @property-read \Kalnoy\Nestedset\Collection|\BrianFaust\Commentable\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $favoriters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $likers
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Media[] $media
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $text
 * @property int $ngo_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereNgoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereUpdatedAt($value)
 */
class Article extends Model implements HasMediaConversions
{
    use Searchable;
    use HasMediaTrait;
    use CanBeLiked, CanBeFavorited;
    use HasComments;
    use HasPageViewCounter;

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

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(200)->height(112.5)->keepOriginalImageFormat();
    }

    public function ngo()
    {
        return $this->belongsTo(ngo::class);
    }
}