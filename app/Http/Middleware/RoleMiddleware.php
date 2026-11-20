<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    // pemakaian di route: ->middleware('role:admin') atau 'role:admin,staff'
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        // belum login -> arahkan ke halaman login
        if (! $user) {
            return redirect()->route('login');
        }

        // sudah login tapi role tidak sesuai -> 403
        if (! in_array($user->role, $roles, true)) {
            abort(403, 'Anda tidak punya hak akses untuk aksi ini.');
        }

        return $next($request);
    }
}
