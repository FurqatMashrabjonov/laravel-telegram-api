<?php

use Furqat\LaravelTelegramApi\app\Http\Controllers\TelegramRequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/api')->group(function () {
    Route::any('telegram-webhook', [TelegramRequestController::class, 'store']);

});
