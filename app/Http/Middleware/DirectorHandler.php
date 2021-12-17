<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DirectorHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('position') == 'director') {
            return $next($request);
        }
        else {
            return redirect('/noperms');
        }
    }
}
