<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah admin sudah login
        if (!session('admin_logged_in')) {
            return redirect('/admin/login')->with('error', 'Harap login terlebih dahulu.');
        }

        return $next($request);
    }
}
