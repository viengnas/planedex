<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SupplierHandler
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
        if(session('position') == 'supplier') {
            return $next($request);
        }
        else {
            return redirect('/noperms');
        }
    }
}
