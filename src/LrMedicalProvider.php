<?php
namespace Zems\LrMedical;

use Illuminate\Support\ServiceProvider;

class LrMedicalProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->LoadViewsFrom(__DIR__.'/views', 'crudapi');
        $this->app->singleton(LrMedicalController::class, function(){
            return new LrMedicalController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route.php');
    }
}
