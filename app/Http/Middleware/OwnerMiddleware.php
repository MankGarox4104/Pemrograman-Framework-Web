<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // cek apakah user login & role-nya owner
        if (Auth::check() && Auth::user()->role === 'owner') {
            return $next($request);
        }

        // jika bukan owner, kembalikan 403 (forbidden)
        abort(403, 'Anda tidak punya akses ke halaman ini.');
    }
}
