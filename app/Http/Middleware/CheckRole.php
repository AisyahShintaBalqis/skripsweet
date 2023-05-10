<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && $request->user()->role == 'Admin') {
            return $next($request);
        } else {
            return $next($request);
        }

        return redirect('/login')->with('error', 'You do not have permission to access this page.');
    }
}
