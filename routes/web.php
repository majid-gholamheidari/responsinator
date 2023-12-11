<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResponseController;
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

Route::get('/', [Controller::class, 'welcome'])->name('welcome');

Route::prefix('auth')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'loginPage'])->name('login-page');
        Route::post('/login', [LoginController::class, 'login'])->name('login');

        Route::get('register', [RegisterController::class, 'registerPage'])->name('register-page');
        Route::post('register', [RegisterController::class, 'register'])->name('register');
    });

    Route::middleware('auth')->post('logout', [LogoutController::class, 'logout'])->name('logout');
});


Route::prefix('dashboard')->middleware('auth:web')->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('response', ResponseController::class);
});

Route::any('responsinator/{uuid}', [\App\Http\Controllers\ResponsinatorController::class, 'returnResponse'])->name('response.url');
