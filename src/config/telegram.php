<?php
return [

    /*
     * There you can add custom telegram commands
     */
    "commands" => [
        "startMe" => \App\Telegram\Commands\Start::class,
        //TODO: add some commands
    ],


    /*
     * Path route that Telegram commands are located
     */
    "commands_path" => app_path("Telegram\\Commands"),


    /*
     * Every webhook by telegram server are receiving by this route
     */
    "webhook_route" => "webhook/telegram"
];
