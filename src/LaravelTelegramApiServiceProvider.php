<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\ServiceProvider;

class LaravelTelegramApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->publishes([
            __DIR__ . '/database/migrations/create_telegram_requests_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_telegram_requests_table.php'),
        ], 'migrations');
    }
}
