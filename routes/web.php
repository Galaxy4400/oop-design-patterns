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
		Route::get('ensure', 'ensure')->name('ensure');
		Route::get('every', 'every')->name('every');
		Route::get('except', 'except')->name('except');
		Route::get('filter', 'filter')->name('filter');
		Route::get('first', 'first')->name('first');
		Route::get('last', 'last')->name('last');
		Route::get('firstWhere', 'firstWhere')->name('firstWhere');
		Route::get('flatMap', 'flatMap')->name('flatMap');
		Route::get('flatten', 'flatten')->name('flatten');
		Route::get('flip', 'flip')->name('flip');
		Route::get('forget', 'forget')->name('forget');
		Route::get('forPage', 'forPage')->name('forPage');
		Route::get('get', 'get')->name('get');
		Route::get('groupBy', 'groupBy')->name('groupBy');
		Route::get('has', 'has')->name('has');
		Route::get('hasAny', 'hasAny')->name('hasAny');
		Route::get('implode', 'implode')->name('implode');
		Route::get('intersect', 'intersect')->name('intersect');
		Route::get('intersectAssoc', 'intersectAssoc')->name('intersectAssoc');
		Route::get('isEmpty', 'isEmpty')->name('isEmpty');
		Route::get('isNotEmpty', 'isNotEmpty')->name('isNotEmpty');
		Route::get('join', 'join')->name('join');
		Route::get('keyBy', 'keyBy')->name('keyBy');
		Route::get('keys', 'keys')->name('keys');
		Route::get('map', 'map')->name('map');
		Route::get('mapSpread', 'mapSpread')->name('mapSpread');
		Route::get('mapToGroups', 'mapToGroups')->name('mapToGroups');
		Route::get('mapWithKeys', 'mapWithKeys')->name('mapWithKeys');
});
