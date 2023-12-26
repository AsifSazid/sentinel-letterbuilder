<?php 
use Illuminate\Support\Facades\Route;
use Sentinel\Letterbuilder\Http\Controllers\Api\PrepcmDemandHistoryController;
//use namespace

Route::group(['middleware' => 'api', 'prefix' => 'api', 'as' => 'api.'], function () {
	Route::apiResource('prepcm-demands', PrepcmDemandController::class);
	Route::get('prepcm-demand-histories-list/{uuid}', [PrepcmDemandHistoryController::class,'list']);
	Route::apiResource('prepcm-demand-histories', PrepcmDemandHistoryController::class);
//Place your route here
});