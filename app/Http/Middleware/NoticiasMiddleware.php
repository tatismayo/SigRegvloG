<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NoticiasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->rol == 'Administrador' or auth()->user()->rol == 'Noticias')
            return $next($request);

        return redirect('unauthorized401');
    }
}
