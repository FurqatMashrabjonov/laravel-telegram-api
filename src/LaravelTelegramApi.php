<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\Facades\Facade;

class LaravelTelegramApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-telegram-api';
    }
}
