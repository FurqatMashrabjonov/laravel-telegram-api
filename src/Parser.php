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
        $this->request = $request->all();
    }

    public function parse()
    {
        $text = $this->request['message']['text'];
        if ($text[0] == '/') {
            (new CommandHandle(substr($text, 1), $this->request['message']))->handle();
        }

    }
}
