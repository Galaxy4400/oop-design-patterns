<?php

use App\Http\Controllers\DelegationController;
use App\Http\Controllers\PropertyContainerController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('fundamental')->group(function () {
	Route::get('property-container', PropertyContainerController::class)->name('property-container');
	Route::get('delegation', DelegationController::class)->name('delegation');
});
