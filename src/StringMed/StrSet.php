<?php

namespace Subhashwebiots\Sqlstringify\StringMed;

use Closure;
use Illuminate\Http\Request;

class StrSet
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!strSync()) {
        return to_route('install.requirements');
      }

      if (strSplic() && $request->is(dbString('YWRtaW4vKg=='))) {
        return to_route('install.block.setup');
      }

      return $next($request)->header('Cache-control', 'no-control, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Exprires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
