<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BehavioralPatternsController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\CreationalPatternsController;
use App\Http\Controllers\StructuralPatternsController;
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
		Route::get('builder', 'builder')->name('builder');
});

Route::controller(StructuralPatternsController::class)
	->prefix('behavioral')
	->group(function () {
		Route::get('adapter', 'adapter')->name('adapter');
		Route::get('facade', 'facade')->name('facade');
		Route::get('bridge', 'bridge')->name('bridge');
		Route::get('composite', 'composite')->name('composite');
		Route::get('decorator', 'decorator')->name('decorator');
		Route::get('proxy', 'proxy')->name('proxy');
});

Route::controller(BehavioralPatternsController::class)
	->prefix('behavioral')
	->group(function () {
		Route::get('strategy', 'strategy')->name('strategy');
		Route::get('observer', 'observer')->name('observer');
		Route::get('template-method', 'templateMethod')->name('template-method');
});

Route::controller(CollectionsController::class)
	->prefix('collections')
	->group(function () {
		Route::get('collect', 'collect')->name('collect');
		Route::get('all', 'all')->name('all');
		Route::get('average', 'average')->name('average');
		Route::get('chunk', 'chunk')->name('chunk');
		Route::get('chunkWhile', 'chunkWhile')->name('chunkWhile');
		Route::get('collapse', 'collapse')->name('collapse');
		Route::get('combine', 'combine')->name('combine');
		Route::get('contact', 'contact')->name('contact');
		Route::get('contains', 'contains')->name('contains');
		Route::get('doesntContain', 'doesntContain')->name('doesntContain');
		Route::get('count', 'count')->name('count');
		Route::get('countBy', 'countBy')->name('countBy');
		Route::get('crossJoin', 'crossJoin')->name('crossJoin');
		Route::get('diff', 'diff')->name('diff');
		Route::get('dot', 'dot')->name('dot');
		Route::get('duplicates', 'duplicates')->name('duplicates');
		Route::get('each', 'each')->name('each');
});
