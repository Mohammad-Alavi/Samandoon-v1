<?php

namespace App\Containers\Article\Models;

use App\Containers\NGO\Models\Ngo;
use App\Scopes\ExcludeUnconfirmedNgo;
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
 * @property int $id
 * @property string|null $text
 * @property int $ngo_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\BrianFaust\Commentable\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $favoriters
 * @property-read mixed $page_views
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $likers
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Media[] $media
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereNgoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\CyrildeWit\EloquentViewable\View[] $views
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article orderByUniqueViewsCount($direction = 'desc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article orderByViewsCount($direction = 'desc')
 * @property string|null $title
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\Article\Models\Article whereTitle($value)
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
            'title' => $this->title,
            'text' => $this->text,
        ];

        // Customize array...

        return $array;
    }

    protected $appends = ['page_views'];

    protected $fillable = [
        'title',
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

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ExcludeUnconfirmedNgo);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(600)->height(337.5)->keepOriginalImageFormat();
    }

    public function getPageViewsAttribute()
    {
        return $this->getPageViews();
    }

    public function ngo()
    {
        return $this->belongsTo(ngo::class);
    }
}