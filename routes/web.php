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

Route::get('/logout', function () {
    auth()->guard()->logout();

    session()->invalidate();

    session()->regenerateToken();

    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::prefix('account')->group(function () {
        Route::prefix('notifications')->group(function () {
            Route::get('/', [\App\Http\Controllers\Account\NotificationController::class, 'index'])->name('account.notifications.index');
            Route::get('{id}', [\App\Http\Controllers\Account\NotificationController::class, 'show'])->name('account.notifications.show');
            Route::put('readall', [\App\Http\Controllers\Account\NotificationController::class, 'readall'])->name('account.notifications.readall');
            Route::post('subscription', [\App\Http\Controllers\Account\NotificationController::class, 'subscription'])->name('account.notifications.subscription');
        });

        Route::prefix('settings')->group(function () {
            Route::get('/', [\App\Http\Controllers\Account\SettingsController::class, 'index'])->name('account.settings.index');
        });
    });
});
