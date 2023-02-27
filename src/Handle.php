<?php

namespace Furqat\LaravelTelegramApi;

use Furqat\LaravelTelegramApi\Traits\TelegramRequest;
use Illuminate\Http\Request;

class Handle
{
    use TelegramRequest;

    public function __invoke(Request $request): void
    {
        $this->store($request->all());

        (new Parser($request))->parse();
    }

}
