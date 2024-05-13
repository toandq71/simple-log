<?php

namespace VoyagerInc\SimpleHistories;

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
        $this->app->bind(\VoyagerInc\SimpleHistories\Interface\LogHistoryInterface::class, \VoyagerInc\SimpleHistories\LogHistory::class);

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
