<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client as Client;
use App\Http\Controllers;

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
    return view('login');
});

Route::controller(Controllers\AuthController::class)->prefix('auth')->group(function () {
    Route::post('/login', 'login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::controller(Client\PeriodeController::class)->prefix('periode')->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('{periode_code}/detail', 'show');
    });

    Route::controller(Client\CashManagementController::class)->prefix('cash-management')->group(function () {
        Route::get('/', 'index');
    });
});



