<?php

namespace toandq71\SimpleLog\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    protected $signature = 'histories:install';

    protected $description = 'Install the Simple Logs package';

    public function handle()
    {
        return $this->install();
    }

    protected function install()
    {
        $this->info('Installing Simple Logs package...');

        // Models
        (new Filesystem)->ensureDirectoryExists(app_path('Models'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/app/Models', app_path('Models'));

        // Views
        (new Filesystem)->ensureDirectoryExists(resource_path('lang'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/lang', resource_path('lang'));

        // Migrate
        (new Filesystem)->ensureDirectoryExists(database_path('migrations'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/database/migrations', database_path('migrations'));

        $this->line('');
        $this->components->info('Package scaffolding installed successfully.');
    }

}
