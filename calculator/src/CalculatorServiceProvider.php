<?php

namespace Dowi\Calculator;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Dowi\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        Livewire::component('counter', Counter::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
