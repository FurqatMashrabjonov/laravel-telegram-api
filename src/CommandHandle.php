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

        if (!class_exists($command_class)) {
            if (isset(config('telegram.commands')[$this->command])) {
                $command_class = config('telegram.commands')[$this->command];
            } else {
                Log::debug('Class not found');
                return;
            }
        }
        Log::debug($command_class);
//        (new $command_class())->handle();

    }
}
