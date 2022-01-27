<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if(!auth()->user()->hasRole($role)){
            return redirect()->route('panel.login');
        }

        return $next($request);
    }
}
