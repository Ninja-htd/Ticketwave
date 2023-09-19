<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\contactController::class, 'index']);
Route::get('/reservation', [App\Http\Controllers\ligne_tarifsController::class, 'index']);
Route::post('/reservation', [App\Http\Controllers\paiementController::class, 'paiement']);
Route::get('/compagnie', [App\Http\Controllers\compagnie_regiterController::class, 'index']);
Route::post('/compagnie', [App\Http\Controllers\compagnie_regiterController::class, 'register']);
Route::get('/contact', [App\Http\Controllers\contactController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\welcomeController::class, 'index']);
// reservation form create in database
Route::post('/contact', [App\Http\Controllers\contactController::class, 'ajout']);
// infoadmin
Route::post('/home', [App\Http\Controllers\Admin_infosController::class, 'ajout']);
