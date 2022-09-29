<?php

namespace Furqat\LaravelTelegramApi\Traits;

use  Furqat\LaravelTelegramApi\app\Models\TelegramRequest as Model;

trait TelegramRequest
{
    public function store($data): bool
    {
       $tg = new Model();
       $tg->data = json_encode($data);
       return $tg->save();
    }
}
