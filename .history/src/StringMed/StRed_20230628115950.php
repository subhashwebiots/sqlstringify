<?php

namespace App\Http\Middleware;

use App\Helpers\Helpers;
use Closure;
use Illuminate\Http\Request;

class StRed
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Helpers::installation()) {
            return redirect()->route('install.requirements');
        }

        return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
