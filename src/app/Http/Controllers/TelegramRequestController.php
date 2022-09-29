<?php

namespace Furqat\LaravelTelegramApi\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Furqat\LaravelTelegramApi\app\Models\TelegramRequest as Model;
use Illuminate\Http\Request;

class TelegramRequestController extends Controller
{
    public function store(Request $request)
    {
        $res = Model::query()->create([
            'data' => json_encode($request->all())
        ]);
        return response()->json([
            'success' => true,
            'data' => $res
        ]);
    }

    public function index(){
       $telegram_requests = Model::query()->select(['data'])->get();
       return json_encode($telegram_requests->toArray());
    }
}
