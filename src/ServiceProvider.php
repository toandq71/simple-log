<?php

namespace VoyagerInc\SimpleLog;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\VoyagerInc\SimpleLog\Interface\LogHistoryInterface::class, \VoyagerInc\SimpleLog\LogHistory::class);

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }

    public function provides()
    {
        return [
            Console\InstallCommand::class
        ];
    }


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}
