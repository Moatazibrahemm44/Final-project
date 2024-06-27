<?php

use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\OffersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;
use App\Models\tours;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ColabIntegrationController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\BookingController;


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


Route::get('/', [App\Http\Controllers\OffersController::class, 'offers'])->name('trips.index');
Route::get('/register', [App\Http\Controllers\TripsController::class, 'createAction'])->name('trips.create');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'storeAction'])->name('trips.store');
Route::get('login', [App\Http\Controllers\loginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\loginController::class, 'loginAction'])->name('trips.login');
Route::get('/chat', [ChatbotController::class, 'executePythonScript']);
Route::get('/tours', [App\Http\Controllers\TripsController::class, 'showAction'])->name('trips.show');

Route::get('/book/{tour}', [App\Http\Controllers\createController::class, 'createAction'])->name('trips.book')->middleware('auth');

Route::get('/destinations', [App\Http\Controllers\TripsController::class, 'destinationAction'])->name('trips.destinations');
Route::get('/trips{trip}', [App\Http\Controllers\TripsController::class, 'viewAction'])->name('trips.view');
Route::get('/trips/{destination}', [App\Http\Controllers\TripsController::class, 'tourAction'])->name('trips.tours');

Route::get('/about', [AboutController::class, 'index'])->name('trips.about');
Route::post('/about', [AboutController::class, 'store']);

Route::get('/contact', [ContactController::class, 'index'])->name('trips.contact');
Route::post('/contact', [ContactController::class, 'store']);

Route::post('/logout', [AuthController::class, 'destroy']);


Route::get('/start-trip', function () {
    return redirect('https://tripplanner.ai/');
});
Route::get('/gmail', function () {
    return redirect('mailto:smarttrips24@example.com');
});

Route::post('/booking', [BookingController::class, 'bookingstore'])->name('booking.store');





