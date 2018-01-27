<?php

namespace michau85\cars;

use Illuminate\Support\ServiceProvider;

class carsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $m=base_path('/packages/michau85/cars/src/migrations/');
        $w=base_path('/packages/michau85/cars/src/views/');
       
        $this->loadMigrationsFrom($m);
        $this->loadViewsFrom($w, 'ca');
        $r=base_path('/packages/michau85/cars/src/routes.php');
        $this->loadRoutesFrom($r);
        
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {  
        //$this->app->make('michau85\cars\controllers\HomeController');
    }
}
