<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Routes Web
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // Routes Admin
        Route::middleware(['web', 'auth', 'admin'])
            ->prefix('admin')
            ->as('admin.')
            ->group(base_path('routes/admin.php'));
    }
}

