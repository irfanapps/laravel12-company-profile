<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // dd([
        //     'user' => $request->user(),
        //     'required_role' => $role,
        //     'has_role' => $request->user()->hasRole($role),
        //     'auth' => Auth::user()->role
        // ]);
        if (Auth::check()) {
            return redirect()->route('login');
        }

        if (!$role) {
            if (Auth::user()->role != $role) {
                abort(403, 'Unauthorized action.');
            }
        }

        return $next($request);
    }
}
