<?php

namespace Furqat\LaravelTelegramApi\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramRequest extends Model
{
    use HasFactory;

    protected $fillable = ['data'];
}
