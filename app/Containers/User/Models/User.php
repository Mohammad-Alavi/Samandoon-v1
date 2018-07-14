<?php

namespace App\Containers\User\Models;

use App\Containers\NGO\Models\NGO;
use App\Containers\Authorization\Traits\AuthorizationTrait;
use App\Containers\Payment\Contracts\ChargeableInterface;
use App\Containers\Payment\Models\PaymentAccount;
use App\Containers\Payment\Traits\ChargeableTrait;
use App\Ship\Parents\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Overtrue\LaravelFollow\Traits\CanFollow;
use Overtrue\LaravelFollow\Traits\CanLike;
use Overtrue\LaravelFollow\Traits\CanFavorite;
use Overtrue\LaravelFollow\Traits\CanSubscribe;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

/**
 * App\Containers\User\Models\User
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $avatar
 * @property bool $confirmed
 * @property string|null $gender
 * @property string|null $birth
 * @property int|null $ngo_id
 * @property bool $is_client
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property string|null $social_provider
 * @property string|null $social_nickname
 * @property string|null $social_id
 * @property string|null $social_token
 * @property string|null $social_token_secret
 * @property string|null $social_refresh_token
 * @property string|null $social_expires_in
 * @property string|null $social_avatar
 * @property string|null $social_avatar_original
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Media[] $media
 * @property-read \App\Containers\NGO\Models\Ngo $ngo
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\Payment\Models\PaymentAccount[] $paymentAccounts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\Authorization\Models\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Containers\Authorization\Models\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship\Parents\Models\UserModel permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ship\Parents\Models\UserModel role($roles)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereIsClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereNgoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialAvatarOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialExpiresIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereSocialTokenSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\User\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends UserModel implements ChargeableInterface, HasMediaConversions
{

    use ChargeableTrait;
    use AuthorizationTrait;
    use HasMediaTrait;
    use CanFollow, CanLike, CanFavorite, CanSubscribe;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

//    protected $guarded = [];
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'avatar',
        'gender',
        'birth',
        'ngo_id',
        'social_provider',
        'social_token',
        'social_refresh_token',
        'social_expires_in',
        'social_token_secret',
        'social_id',
        'social_avatar',
        'social_avatar_original',
        'social_nickname',
        'confirmed',
        'is_client',
    ];

    protected $casts = [
        'is_client' => 'boolean',
        'confirmed' => 'boolean'
    ];

    /**
     * The dates attributes.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $resourceKey = 'users';

    public function paymentAccounts()
    {
        return $this->hasMany(PaymentAccount::class);
    }

    public function ngo(){
        return $this->hasOne(NGO::class)->withDefault();
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(200)->height(200)->keepOriginalImageFormat();
    }

    public function delete()
    {
        DB::transaction(function()
        {
            $this->ngo()->delete();
            parent::delete();
        });
    }
}
