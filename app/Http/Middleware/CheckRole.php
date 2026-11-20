<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Izinkan akses hanya untuk role yang disebutkan di route.
     * Contoh pemakaian: ->middleware('role:admin') atau ->middleware('role:admin,staff')
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Guest / belum login -> arahkan ke halaman login
        if (! $request->user()) {
            return redirect()->route('login');
        }

        // Sudah login tapi role tidak sesuai -> 403
        if (! in_array($request->user()->role, $roles)) {
            abort(403, 'Anda tidak memiliki hak akses untuk aksi ini.');
        }

        return $next($request);
    }
}
