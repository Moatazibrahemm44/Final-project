<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\TripsController;
use App\Http\Controllers\Auth\OffersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;
use App\Models\tours;
use App\Http\Controllers\FirebaseController;


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


Route::get('/', [App\Http\Controllers\OffersController::class, 'offers'])->name('trips.index');//Route name 
Route::get('/register', [App\Http\Controllers\TripsController::class, 'createAction'])->name('trips.create');//Route name 
Route::post('/register', [App\Http\Controllers\AuthController::class, 'storeAction'])->name('trips.store');
Route::get('/login', [App\Http\Controllers\loginController::class, 'login'])->name('trips.signin');
Route::post('/login', [App\Http\Controllers\loginController::class, 'loginAction'])->name('trips.login');
Route::get('/tours', [App\Http\Controllers\TripsController::class, 'showAction'])->name('trips.show');
Route::get('/images/{name}', [FirebaseController::class, 'retrieveImagesByName']);
Route::get('/trips/{trip}', [App\Http\Controllers\TripsController::class, 'viewAction'])->name('trips.view');



