<?php

namespace App\Containers\NGO\Models;

use App\Containers\Event\Models\Event;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use Conner\Tagging\Taggable;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Ngo extends Model implements HasMedia
{
    use Taggable;
    use Searchable;
    use HasMediaTrait;

    public $asYouType = true;

    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'name' => $this->name,
        ];

        // Customize array...

        return $array;
    }

    protected $fillable = [
        'name',
        'description',
        'area_of_activity',
        'address',
        'zip_code',
        'type',
        'logo_photo',
        'banner_photo',
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
            parent::delete();
        });
    }
}
