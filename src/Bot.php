<?php

namespace Furqat\LaravelTelegramApi;

use Illuminate\Support\Facades\Log;

class Bot extends ApiCall
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Use this method to send text messages. On success, the sent \TelegramBot\Api\Types\Message is returned.
     *
     * @param int|string $chatId
     * @param string $text
     * @param string|null $parseMode
     */
    public function sendMessage(
        int|string $chatId,
        string     $text,
        string     $parseMode = null,
        array      $replyMarkup = [],
//        $disablePreview = false,
//        $replyToMessageId = null,
//        $disableNotification = false
    )
    {
        Log::debug(json_encode($replyMarkup));
        $this->call('sendMessage', [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => $parseMode,      //TODO: do it globally
            'reply_markup' => json_encode($replyMarkup)
        ]);
    }

    private function argsFilter($args)
    {
        $r = [];
        foreach ($args as $key => $arg) {
            if ($arg)
                $r[$key] = $arg;
        }
        return $r;
    }

}
