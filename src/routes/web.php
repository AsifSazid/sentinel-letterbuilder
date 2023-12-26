<?php 
use Illuminate\Support\Facades\Route;

use Sentinel\Letterbuilder\Http\Controllers\LetterBuilderController;
//use namespace

Route::get('/home', [LetterBuilderController::class, 'home'])->name('home');
Route::get('/individual-template', [LetterBuilderController::class, 'singleTemplate'])->name('singleTemplate');
Route::get('/multiple-templates', [LetterBuilderController::class, 'multipleTemplate'])->name('multipleTemplate');
Route::get('/how-to-use', [LetterBuilderController::class, 'howToUse'])->name('howToUse');
Route::get('/about-us', [LetterBuilderController::class, 'about'])->name('aboutUs');
Route::get('/contact-us', [LetterBuilderController::class, 'contact'])->name('contactUs');