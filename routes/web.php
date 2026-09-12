<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/connexion');
})->name('logout');
Route::get('/', [SiteController::class, 'home'])->name('home');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/rendezvous/{id}', [AdminDashboardController::class, 'updateRendezvous'])->name('admin.rendezvous.update');
});
Route::get('/connexion', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/connexion', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/methode', [SiteController::class, 'methode'])->name('methode');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/tarifs', [SiteController::class, 'tarifs'])->name('tarifs'); // si tu veux l'utiliser dans le menu
Route::get('/parcours', [SiteController::class, 'parcours'])->name('parcours');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/calendar', [AdminDashboardController::class, 'calendar'])->name('admin.calendar');
});

Route::post('/contact', [ContactController::class, 'send']);
Route::get('/debug', function () {
    try {
        // Test APP_KEY
        $key = config('app.key');

        // Test DB
        DB::connection()->getPdo();

        return "APP_KEY: $key\nDB: OK";
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});
Route::get('/ping', function () {
    return 'pong';
});

