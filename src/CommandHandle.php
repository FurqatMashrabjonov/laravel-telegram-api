<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\Facades\Log;

class CommandHandle
{

    protected $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function handle()
    {
        $command_class = 'App\\Telegram\\Commands\\' . ucfirst($this->command);
//        Log::debug('App\\Telegram\\Commands\\' . ucfirst($this->command));
        if (class_exists($command_class)) {
            (new $command_class())->handle();
        }
    }

}
