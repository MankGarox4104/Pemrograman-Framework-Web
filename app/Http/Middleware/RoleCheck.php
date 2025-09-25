<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (! $request->user() || $request->user()->role !== $role) {
            // kalau role tidak sesuai, arahkan ke home
            return redirect('/')->with('error', 'Anda tidak punya akses ke halaman ini.');
        }

        return $next($request);
    }
}
