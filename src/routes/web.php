<?php

use Furqat\LaravelTelegramApi\app\Http\Controllers\TelegramRequestController;
use Furqat\LaravelTelegramApi\Handle;
use Illuminate\Support\Facades\Route;

Route::get('telegram-dashboard', [TelegramRequestController::class, 'index']);


Route::prefix('webhook')->group(function () {
    Route::post('telegram', Handle::class);
});
