<?php

namespace Furqat\LaravelTelegramApi\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Furqat\LaravelTelegramApi\app\Models\TelegramRequest;
use Illuminate\Http\Request;

class TelegramRequestController extends Controller
{
    public function store(Request $request)
    {
        TelegramRequest::query()->insert([
            'data' => json_encode($request->all())
        ]);
    }
}
