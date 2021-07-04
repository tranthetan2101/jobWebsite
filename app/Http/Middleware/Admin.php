<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;


class Admin
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
        // Neu la admin
        if (Auth::check() && Auth::user()->type == 'admin') {
            //Tiep tuc truy cap
            return $next($request);
        }
        abort(403);
    }
}
