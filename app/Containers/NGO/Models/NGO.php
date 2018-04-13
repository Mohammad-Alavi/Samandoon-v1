<?php

namespace App\Containers\NGO\Models;

use App\Containers\Article\Models\Article;
use App\Containers\Event\Models\Event;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use Conner\Tagging\Taggable;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Searchable;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeSubscribed;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

/**
 * App\Containers\NGO\Models\Ngo
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\Article\Models\Article[] $articles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\Event\Models\Event[] $events
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $favoriters
 * @property mixed $tag_names
 * @property-read \Illuminate\Database\Eloquent\Collection $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Media[] $media
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\Event\Models\Event[] $phones
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\NGO\Models\Subject[] $subjects
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\User\Models\User[] $subscribers
 * @property-read \Illuminate\Database\Eloquent\Collection|\Conner\Tagging\Model\Tagged[] $tagged
 * @property-read \App\Containers\User\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo withAllTags($tagNames)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo withAnyTag($tagNames)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo withoutTags($tagNames)
 * @mixin \Eloquent
 */
class Ngo extends Model implements HasMediaConversions
{
    use Taggable;
    use Searchable;
    use HasMediaTrait;
    use CanBeFavorited, CanBeSubscribed;

    public $asYouType = true;

    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'name' => $this->name,
            'national_number' => $this->national_number,
        ];

        // Customize array...

        return $array;
    }

    protected $fillable = [
        'name',
        'description',
        'area_of_activity',
        'city',
        'province',
        'address',
        'status',
        'zip_code',
        'type',
        'user_id',
        'national_number',
        'registration_number',
        'registration_date',
        'registration_unit',
    ];

    protected $hidden = [];

    protected $casts = [
        'confirmed' => 'boolean'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->crop(Manipulations::CROP_CENTER,10,10)->keepOriginalImageFormat();
    }

    // this is a recommended way to declare event handlers
//    protected static function boot() {
//        parent::boot();
//
//        static::deleting(function($user) { // before delete() method call this
//            $user->photos()->delete();
//            // do the rest of the cleanup...
//        });
//    }

    public function delete()
    {
        DB::transaction(function()
        {
            $this->articles()->delete();
            $this->events()->delete();
            $this->subjects()->detach();
            $this->phones()->delete();

            // revoke user's permission to manage events and articles
            $this->user->revokePermissionTo('manage-event');
            $this->user->revokePermissionTo('manage-article');

            parent::delete();
        });
    }
}
