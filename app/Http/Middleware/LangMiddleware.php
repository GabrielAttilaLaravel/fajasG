<?php

namespace App\Http\Middleware;

use Closure;

class LangMiddleware
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
        // por una variable de sesión llamada “lang”, si esta existe, usaremos el valor de la misma (“en” – “es”)
        if (!empty(session('lang'))) {
            \App::setLocale(session('lang'));
        }

        return $next($request);
    }
}
