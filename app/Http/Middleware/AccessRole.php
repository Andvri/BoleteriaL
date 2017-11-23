<?php

namespace App\Http\Middleware;

use Closure;

class AccessRole
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
        if (\Auth::user()->access != "Administrador") {
            return redirect('/');
        }

        return $next($request);
    }
}
