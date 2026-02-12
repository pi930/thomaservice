<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserMessageController;
use App\Http\Controllers\User\UserAppointmentController;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Dashboard utilisateur (redirige vers admin si admin)
Route::get('/dashboard', function () {
    if (auth()->check() && auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profil utilisateur (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes utilisateur : messagerie + rendez-vous
Route::middleware(['auth'])->group(function () {
  Route::resource('user-messages', UserMessageController::class)->only(['index', 'store']);
    Route::resource('appointments', UserAppointmentController::class)->only(['index', 'store']);
});
Route::post('/appointments/{appointment}/{status}', [UserAppointmentController::class, 'updateStatus'])
    ->name('appointments.updateStatus');
    
Route::get('/services', function () {
    return view('services.index');
})->name('services');

// Auth Breeze
require __DIR__.'/auth.php';

// Routes admin séparées
require __DIR__.'/admin.php';


