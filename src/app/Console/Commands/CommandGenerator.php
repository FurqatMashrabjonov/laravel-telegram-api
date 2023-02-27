<?php

namespace Furqat\LaravelTelegramApi\app\Console\Commands;

use Illuminate\Console\Command;

class CommandGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:command {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new telegram command handler';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $content = $this->filler();

        if (is_dir(config('telegram.commands_path'))) {
            $file_path = config('telegram.commands_path') . '\\' . ucfirst($this->argument('name')) . '.php';

        } else {
            if (!mkdir(config('telegram.commands_path'), 0777, true)) {
                $this->error('Failed to create directories');
            } else {
                $file_path = config('telegram.commands_path') . '\\' . ucfirst($this->argument('name')) . '.php';

            }
        }

        if (file_exists($file_path)) {
            $this->error(" ERROR ");
            $this->line("Command already exists");
        } else {
            file_put_contents($file_path, $content);
            $this->info("The command was created successfully!");
        }


    }

    public function filler()
    {
        $template = file_get_contents(__DIR__ . '/templates/telegram_command.php.stub');
        $res = explode('{{command}}', $template);
        return $res[0] . $this->argument('name') . $res[1];
    }

}
