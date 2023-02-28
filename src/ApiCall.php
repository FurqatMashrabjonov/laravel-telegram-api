<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiCall
{

    private string $base_url = '';

    public function __construct()
    {
        $this->base_url = 'https://api.telegram.org/bot' . config('telegram.token');
    }

    /**
     * @param string $method
     * @param array $opts
     * @return void
     */
    public function call($method, $opts)
    {
        try {
            $res = Http::post($this->base_url . '/' . $method, $opts);
            Log::debug($res->body());
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
        }
    }


}
