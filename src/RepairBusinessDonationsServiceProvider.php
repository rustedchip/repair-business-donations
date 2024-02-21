<?php

namespace Rustedchip\RepairBusinessDonations;

use Illuminate\Support\ServiceProvider;

class RepairBusinessDonationsServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/packages.php', 'packages'
        );

 
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'resources/Views', 'repair-business-donations');
 
        
    }

    protected function registerConfig()
    {
 
    }
}