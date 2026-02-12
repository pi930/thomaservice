<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserController;

Route::get('/test-admin', function () {
    return dd([
        'auth_user' => Auth::user(),
        'session' => session()->all(),
    ]);
});
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('services', ServiceController::class);
        Route::resource('appointments', AppointmentController::class)->only(['index', 'show']);
        Route::post('appointments/{appointment}/{status}', [AppointmentController::class, 'updateStatus'])
            ->name('appointments.status');
        Route::post('/appointments', [AppointmentController::class, 'store'])
    ->name('appointments.store');

      
        Route::resource('users', UserController::class)->only(['index', 'show']);
    });
    Route::get('admin/messages', [MessageController::class, 'index'])->name('admin.messages.index');
Route::get('admin/messages/{conversation}', [MessageController::class, 'show'])->name('admin.messages.show');
Route::post('admin/messages/{conversation}', [MessageController::class, 'store'])->name('admin.messages.store');


