<?php

use App\Http\Controllers\OffreController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//routes offres 
Route::get('/', [OffreController::class, 'index'])->name('offre.index');
Route::get('/offre/{id}', [OffreController::class, 'show'])->name('offre.show');

Route::get('/nouvelle-offre', [OffreController::class, 'create'])->name('offre.create');
Route::post('/nouvelle-offre', [OffreController::class, 'store'])->name('offre.store');

Route::get('/modifier-offre/{id}', [OffreController::class, 'edit'])->name('offre.edit');
Route::post('/modifier-offre/{id}', [OffreController::class, 'update'])->name('offre.update');

Route::post('/supprimer-offre/{id}', [OffreController::class, 'destroy'])->name('offre.destroy');