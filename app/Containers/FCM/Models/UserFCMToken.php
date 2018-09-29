<?php

namespace App\Containers\FCM\Models;

use App\Ship\Parents\Models\Model;

/**
 * App\Containers\FCM\Models\UserFCMToken
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int|null $user_id
 * @property string|null $android_fcm_token
 * @property string|null $apns_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\FCM\Models\UserFCMToken whereAndroidFcmToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\FCM\Models\UserFCMToken whereApnsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\FCM\Models\UserFCMToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\FCM\Models\UserFCMToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\FCM\Models\UserFCMToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Containers\FCM\Models\UserFCMToken whereUserId($value)
 */
class UserFCMToken extends Model
{
    protected $fillable = [
        'user_id',
        'android_fcm_token',
        'apns_id',
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

    protected $table = 'user_fcm_token';

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'userfcmtokens';
}
