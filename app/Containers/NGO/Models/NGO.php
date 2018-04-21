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
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $area_of_activity
 * @property string|null $city
 * @property string|null $province
 * @property string|null $address
 * @property string|null $status
 * @property string|null $zip_code
 * @property string|null $type
 * @property bool $confirmed
 * @property int $user_id
 * @property string|null $national_number
 * @property string|null $registration_number
 * @property string|null $registration_date
 * @property string|null $registration_unit
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereAreaOfActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereNationalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereRegistrationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereRegistrationUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\NGO\Models\Ngo whereZipCode($value)
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
        $this->addMediaConversion('logo_thumb')->width(200)->height(200)->keepOriginalImageFormat()->performOnCollections('ngo_logo');
        $this->addMediaConversion('banner_thumb')->width(600)->height(337.5)->keepOriginalImageFormat()->performOnCollections('ngo_banner');
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
        DB::transaction(function () {
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
