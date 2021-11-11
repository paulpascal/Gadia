<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsViesco
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
        if ($request->user()->status != 'viescolaire') {
            return redirect()->intended($request->user()->status);
        }

        return $next($request);
    }
}
