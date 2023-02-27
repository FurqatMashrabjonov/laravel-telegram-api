<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\Facades\Log;

class Bot
{
    private ApiCall $api_call;

    public function __construct()
    {
        $this->api_call = new ApiCall();
    }
    public function sendMessage($text){
        $this->call('sendMessage', $text);
    }

//    private function call(){
//        return
//    }

}
