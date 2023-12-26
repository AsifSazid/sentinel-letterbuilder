<?php

namespace Sentinel\Letterbuilder;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LetterBuilderServiceProvider extends ServiceProvider
{
    public function boot()
    {
    $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
    $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    $this->loadViewsFrom(__DIR__ . '/resources/views', 'letterbuilder');

    $this->commands([
        ##InstallationCommandClass##
    ]);
    
    \Illuminate\Support\Facades\Blade::component('lbs-master', \Sentinel\Letterbuilder\App\View\Components\Layouts\Master::class);
    Blade::component('lbs-header', \Sentinel\Letterbuilder\App\View\Components\Layouts\Partials\Header::class);
    Blade::component('lbs-footer', \Sentinel\Letterbuilder\App\View\Components\Layouts\Partials\Footer::class);
// \Illuminate\Support\Facades\Blade::component('layouts.header', \Sentinel\Letterbuilder\App\View\Components\Layouts::class);
##||ANOTHERCOMPONENT||##
    
    }
    public function register()
    { }
}