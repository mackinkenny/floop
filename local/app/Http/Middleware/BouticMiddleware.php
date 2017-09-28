<?php

namespace App\Http\Middleware;

use Closure;

class BouticMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->is_boutic == 1) {
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}
