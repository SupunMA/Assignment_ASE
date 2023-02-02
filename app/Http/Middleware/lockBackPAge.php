<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class lockBackPAge
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
        $response = $next($request);
        return $response->header('Cache-Control','nocache,no-store,max-age-0,must-revaildate')
                        ->header('Pragma','no-cache')
                        ->header('Expires','Sun, 23 jan 1998 00:00:00 GMT');
    }
}
