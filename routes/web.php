<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BehavioralPatternsController;
use App\Http\Controllers\CreationalPatternsController;
use App\Http\Controllers\FundamentalPatternsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::controller(FundamentalPatternsController::class)
	->prefix('fundamental')
	->group(function () {
		Route::get('property-container', 'propertyContainer')->name('property-container');
		Route::get('delegation', 'delegation')->name('delegation');
		Route::get('event-chanale', 'eventChanale')->name('event-chanale');
});

Route::controller(CreationalPatternsController::class)
	->prefix('creational')
	->group(function () {
		Route::get('abstract-factory', 'abstractFactory')->name('abstract-factory');
		Route::get('factory-method', 'factoryMethod')->name('factory-method');
		Route::get('static-factory', 'staticFactory')->name('static-factory');
		Route::get('simple-factory', 'simpleFactory')->name('simple-factory');
		Route::get('singleton', 'singleton')->name('singleton');
		Route::get('multiton', 'multiton')->name('multiton');
});

Route::controller(BehavioralPatternsController::class)
	->prefix('behavioral')
	->group(function () {
		Route::get('strategy', 'strategy')->name('strategy');
});
