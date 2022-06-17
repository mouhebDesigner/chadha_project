<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\TrajetController;
use App\Http\Controllers\Admin\PassagerController;
use App\Http\Controllers\Admin\ConducteurController;
use App\Http\Controllers\ReservationClientController;
use App\Http\Controllers\TrajetController as TrajetControllerFront;

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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('passagers', [PassagerController::class, 'index']);
    Route::get('conducteurs', [ConducteurController::class, 'index']);
    Route::resource('trajets', TrajetController::class)->only('index', 'show');
    Route::get('users', [UserController::class, 'index']);
    Route::get('user/{id}/approuver', [UserController::class, 'approuver']);
    Route::delete('user/{id}', [UserController::class, 'destroy']);
});
Route::prefix('conducteur')->name('conducteur.')->group(function () {
    Route::resource('trajets', TrajetController::class);
    Route::get('reservations', [ReservationController::class, 'index']);
    Route::put('reservations/{reservation}/accepter', [ReservationController::class, 'accepter'])->name('reservations.accepter');
    Route::put('reservations/{reservation}/refuser', [ReservationController::class, 'refuser'])->name('reservations.refuser');

    Route::get('users', [UserController::class, 'index']);
});
Route::get('trajets', [TrajetControllerFront::class, 'index']);
Route::get('reserver/{trajet_id}', [ReservationClientController::class, 'create']);
Route::post('reserver/', [ReservationClientController::class, 'store'])->name('reserver');
Route::resource('profile', ProfileController::class)->only('index', 'update')->middleware('auth');
Route::get('/contacts', [ContactController::class,'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class,'store'])->name('contacts.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
