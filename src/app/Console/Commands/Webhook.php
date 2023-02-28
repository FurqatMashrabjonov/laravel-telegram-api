<?php

namespace Furqat\LaravelTelegramApi\app\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Webhook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:webhook {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set and delete webhook';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $response = Http::get('https://api.telegram.org/bot' . config('telegram.token') . '/setWebhook?url=' . $this->argument('url') . '/' . config('telegram.webhook_route'));
        if ($response->ok())
            $this->info('Webhook was successfully set');
        else
            $this->error('ERROR');

    }
}
