<?php

namespace Furqat\LaravelTelegramApi;

class Bot
{
    private ApiCall $call;

    public function __construct()
    {
        $this->call = new ApiCall();
    }
    public function sendMessage($chat_id, $opts){
//      $this->()
    }

}
