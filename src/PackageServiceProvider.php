<?php

namespace Lukasgrofcik\Package;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() : void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() : void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
    }
}
