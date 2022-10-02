<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\Facades\Log;

class Parser
{
    protected $request;

//    private array $entities = [
//      'bot_command' =>
//    ];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function parse()
    {
        Log::debug(json_encode($this->request->all()));
//        $text = $this->request->message->text;
//        if ($text[0] == '/') {
//            (new CommandHandle(substr($text, 1), $this->request->message))->handle();
//        }

    }
}
