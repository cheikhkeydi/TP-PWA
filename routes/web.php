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
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('A-propos',App\Http\Controllers\AproposController::class)->names('A-propos');
    Route::resource('Social',App\Http\Controllers\SocialController::class)->names('Social');
    Route::resource('Porfolio',App\Http\Controllers\SocialController::class)->names('Porfolio');
    Route::resource('Service',App\Http\Controllers\SocialController::class)->names('Service');
    Route::resource('Competence',App\Http\Controllers\SocialController::class)->names('Competence');
    Route::resource('Temoignage',App\Http\Controllers\SocialController::class)->names('Temoignage');
    Route::resource('Categorie',App\Http\Controllers\SocialController::class)->names('Categorie');
    Route::resource('Contact',App\Http\Controllers\SocialController::class)->names('Contact');
    Route::resource('Tarif',App\Http\Controllers\SocialController::class)->names('Tarif');
});

