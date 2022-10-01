<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\Facades\Log;

class CommandHandle
{

    public $command;
    public $message;

    public function __construct($command, $message)
    {
        $this->message = $message;
        $this->command = $command;
    }

    public function handle()
    {
        $command_class = 'App\\Telegram\\Commands\\' . ucfirst($this->command);

        if (!class_exists($command_class)) {
            if (isset(config('telegram.commands')[$this->command])) {
                $command_class = config('telegram.commands')[$this->command];
            } else {
                Log::debug('class topilmadi');
                return false;
            }
        }
        (new $command_class())->handle(new Message($this->message));
    }
}
