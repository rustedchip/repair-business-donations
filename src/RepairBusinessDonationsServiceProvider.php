<?php

namespace Rustedchip\RepairBusinessDonations;

use Illuminate\Support\ServiceProvider;

class RepairBusinessDonationsServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/repair-business-packages.php', 'repair-business-packages'
        );

 
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Migrations/migrations');
        $this->loadViewsFrom(__DIR__.'Resources/Views', 'repair-business-donations');
 
        
    }

    protected function registerConfig()
    {
 
    }
}