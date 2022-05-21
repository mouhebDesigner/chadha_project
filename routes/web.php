<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TrajetController;
use App\Http\Controllers\Admin\PassagerController;
use App\Http\Controllers\Admin\ConducteurController;

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
});
Route::prefix('conducteur')->name('conducteur.')->group(function () {
    Route::resource('trajets', TrajetController::class);
    Route::get('reservations', [ReservationController::class, 'index']);
    Route::get('users', [UserController::class, 'index']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
