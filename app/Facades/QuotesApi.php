<?php

namespace App\Facades;

use App\Managers\ApiManager;
use Closure;
use Illuminate\Support\Facades\Facade;
use RuntimeException;

/**
 * @method static ApiManager getDefaultDriver()
 * @method static ApiManager driver(string $name)
 * @method static ApiManager extend(string $driver, Closure $callback)
 * @method static mixed run($data)
 */
class QuotesApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'QuotesApi';
    }
}