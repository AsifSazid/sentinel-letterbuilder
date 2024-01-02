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

    $this->publishes([
        __DIR__.'/../publishable/assets' => public_path('ui/frontend/assets'),
    ], 'public');

    $this->commands([
        ##InstallationCommandClass##
    ]);
    
    \Illuminate\Support\Facades\Blade::component('lbs-master', \Sentinel\Letterbuilder\App\View\Components\Layouts\Master::class);
    \Illuminate\Support\Facades\Blade::component('lbs-bn-master', \Sentinel\Letterbuilder\App\View\Components\Layouts\MasterBN::class);
    Blade::component('lbs-header', \Sentinel\Letterbuilder\App\View\Components\Layouts\Partials\Header::class);
    Blade::component('lbs-bn-header', \Sentinel\Letterbuilder\App\View\Components\Layouts\Partials\HeaderBN::class);
    Blade::component('lbs-footer', \Sentinel\Letterbuilder\App\View\Components\Layouts\Partials\Footer::class);
    Blade::component('lbs-bn-footer', \Sentinel\Letterbuilder\App\View\Components\Layouts\Partials\FooterBN::class);
    // \Illuminate\Support\Facades\Blade::component('layouts.header', \Sentinel\Letterbuilder\App\View\Components\Layouts::class);
    ##||ANOTHERCOMPONENT||##
    

    // Pdf, Preview, Web Prview Components 
    Blade::component('pdf-date', \Sentinel\Letterbuilder\App\View\Components\Pdfs\PdfDate::class);
    Blade::component('pdf-no', \Sentinel\Letterbuilder\App\View\Components\Pdfs\PdfNumber::class);
    Blade::component('pdf-postscript', \Sentinel\Letterbuilder\App\View\Components\Pdfs\PdfPostscript::class);
    Blade::component('pdf-instructionNo', \Sentinel\Letterbuilder\App\View\Components\Pdfs\PdfInstructionNo::class);
    Blade::component('pdf-letterName', \Sentinel\Letterbuilder\App\View\Components\Pdfs\PdfLetterName::class);
    Blade::component('pdf-govtMinistryWeb', \Sentinel\Letterbuilder\App\View\Components\Pdfs\PdfGovtMinistryWeb::class);
}
    public function register()
    { }
}