<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client as Client;
use App\Http\Controllers as Controller;

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
})->name('login');

Route::controller(Controller\AuthController::class)->prefix('auth')->group(function () {
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

    Route::controller(Controller\AuthController::class)->prefix('profile')->group(function () {
        Route::put('/update', 'updateProfile');
        Route::patch('/email/update', 'updateEmail');
    });

    Route::controller(Controller\SettingController::class)->prefix('settings')->group(function () {
        Route::get('/', 'index');
        Route::get('/category', 'category');
        Route::post('/category/post', 'createCategory');
        Route::delete('/category/{id}/delete', 'deleteCategory');
    });

    Route::controller(Controller\AuthController::class)->prefix('profile')->group(function () {
    });
});



