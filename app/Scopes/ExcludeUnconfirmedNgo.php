<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ExcludeUnconfirmedNgo implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if (class_basename($model) == 'Article' || class_basename($model) == 'Event') {
            $builder->whereHas('ngo', function ($q) {
                $q->where('verification_status', config('samandoon.ngo_verification_status.verified'))->orWhere(function ($query) {
                    $query->whereNotIn('verification_status', [config('samandoon.ngo_verification_status.verified')])
                        ->Where('user_id', auth('api')->id());
                });
            });
        }

        if (class_basename($model) == 'Ngo') {
            $builder->where('ngos.verification_status', config('samandoon.ngo_verification_status.verified'))
                ->orWhere(function ($query) {
                    $query->whereNotIn('verification_status', [config('samandoon.ngo_verification_status.verified')])
                        ->Where('ngos.user_id', auth('api')->id());
                });
        }
    }
}