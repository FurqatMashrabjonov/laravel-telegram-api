<?php

namespace Furqat\LaravelTelegramApi;

class Message
{
    public $id;
    public $from;
    public $chat;
    public $date;
    public $text;
    public $entities;

    public function __construct(array $message)
    {
        $this->id = $message['message_id'];
        $this->from = $message['from'];
        $this->chat = $message['chat'];
        $this->date = $message['date'];
        $this->text = $message['text'];
        $this->entities = $message['entities'] ?? null;
    }

    public function get()
    {
        return $this->id;
    }

}
