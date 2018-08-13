<?php

namespace App\Containers\FCM\Models;

use App\Ship\Parents\Models\Model;

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