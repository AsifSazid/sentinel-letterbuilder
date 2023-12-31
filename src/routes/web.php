<?php

use Illuminate\Support\Facades\Route;

use Sentinel\Letterbuilder\Http\Controllers\LetterBuilderController;
use Sentinel\Letterbuilder\Http\Controllers\LetterBuilderBNController;
use Sentinel\Letterbuilder\Http\Controllers\PdfController;
use Sentinel\Letterbuilder\Http\Controllers\PreviewController;

//use namespace

Route::get('/home', [LetterBuilderController::class, 'home'])->name('home');
Route::get('/individual-template', [LetterBuilderController::class, 'singleTemplate'])->name('singleTemplate');
Route::get('/multiple-templates', [LetterBuilderController::class, 'multipleTemplate'])->name('multipleTemplate');
Route::get('/how-to-use', [LetterBuilderController::class, 'howToUse'])->name('howToUse');
Route::get('/about-us', [LetterBuilderController::class, 'about'])->name('aboutUs');
Route::get('/contact-us', [LetterBuilderController::class, 'contact'])->name('contactUs');

Route::group(['prefix' => 'bn', 'as' => 'bn.'], function () {
    Route::get('/home', [LetterBuilderBNController::class, 'home'])->name('home');
    Route::get('/individual-template', [LetterBuilderBNController::class, 'singleTemplate'])->name('singleTemplate');
    Route::get('/multiple-templates', [LetterBuilderBNController::class, 'multipleTemplate'])->name('multipleTemplate');
    Route::get('/how-to-use', [LetterBuilderBNController::class, 'howToUse'])->name('howToUse');
    Route::get('/about-us', [LetterBuilderBNController::class, 'about'])->name('aboutUs');
    Route::get('/contact-us', [LetterBuilderBNController::class, 'contact'])->name('contactUs');
});


Route::get('/pdf/{docId}', [PdfController::class, 'downloadPdf'])->name('pdfDownload');
Route::get('/details-view/{docId}', [PreviewController::class, 'detailsView'])->name('details');
Route::get('/bn/details-view/{docId}', [PreviewController::class, 'detailsViewBn'])->name('bn.details');
Route::get('/preview/{docId}', [PreviewController::class, 'preview'])->name('preview');
Route::get('/web-preview/{docId}', [PreviewController::class, 'webPreview'])->name('web.preview');
