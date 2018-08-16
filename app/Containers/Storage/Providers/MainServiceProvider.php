<?php

namespace App\Containers\Storage\Providers;

use App\Ship\Parents\Providers\MainProvider;



use Closure;
use InvalidArgumentException;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;


/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        // InternalServiceProviderExample::class,
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [
        // 'Foo' => Bar::class,
    ];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

    // needed because of the TNT search scout package uses methods that are specific from laravel 5.6
    // may be able to remove this if this app gets upgraded OR they fix the issue: https://github.com/teamtnt/laravel-scout-tntsearch-driver/issues/171
        QueryBuilder::macro('joinSub', function ($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false) {
            list($query, $bindings) = $this->createSub($query);
            $expression = '('.$query.') as '.$this->grammar->wrap($as);
            $this->addBinding($bindings, 'join');
            return $this->join(new Expression($expression), $first, $operator, $second, $type, $where);
        });

        QueryBuilder::macro('leftJoinSub', function ($query, $as, $first, $operator = null, $second = null) {
            return $this->joinSub($query, $as, $first, $operator, $second, 'left');
        });

        QueryBuilder::macro('createSub', function ($query) {
            if ($query instanceof Closure) {
                $callback = $query;
                $callback($query = $this->forSubQuery());
            }
            return $this->parseSub($query);
        });

        QueryBuilder::macro('parseSub', function ($query) {
            if ($query instanceof self || $query instanceof EloquentBuilder) {
                return [$query->toSql(), $query->getBindings()];
            } elseif (is_string($query)) {
                return [$query, []];
            } else {
                throw new InvalidArgumentException;
            }
        });
    }
}
