<?php
 return [
   "commands" => [
       "startMe" => \App\Telegram\Commands\Start::class,
       //TODO: add some commands
   ],
     "commands_path" => app_path("Telegram\\Commands"),
 ];
