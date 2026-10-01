<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
   public function handle($request, Closure $next)
{
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    if (!auth()->user()->is_admin) {
        abort(403, 'Accès refusé');
    }

    return $next($request);
}

}

