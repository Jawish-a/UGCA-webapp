<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //return $next($request);
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role_id == 3) {
            return $next($request);
        }
        else {
            return redirect()->route('home');
        }
    }
}
